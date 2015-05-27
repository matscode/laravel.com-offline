<?php namespace App\Services\Documentation;

use App\CustomParser;
use App\Documentation;
use Illuminate\Filesystem\Filesystem;
use ParsedownExtra;
use Vinkla\Algolia\AlgoliaManager;

class Indexer {
	/**
	 * @var \AlgoliaSearch\Index
	 */
	private $index_tmp;

	/**
	 * @var \AlgoliaSearch\Client
	 */
	private $client;

	/**
	 * @var ParsedownExtra
	 */
	private $markdown;

	/**
	 * @var Filesystem
	 */
	private $files;

	private $noIndex = [
		'documentation',
		'license'
	];

	private static $index_name = 'docs';

	private $tags = [
		'h1' => 0,
		'h2' => 1,
		'h3' => 2,
		'h4' => 3,
		'p'  => 4,
		'td' => 4,
		'li' => 4
	];

	public function __construct(AlgoliaManager $client, CustomParser $markdown, Filesystem $files)
	{
		$this->client       = $client;
		$this->index_tmp    = $client->initIndex(static::$index_name.'_tmp');
		$this->markdown     = $markdown;
		$this->files        = $files;
	}

	/**
	 * Index all docs for all versions from local markdown files
	 */
	public function indexAllDocuments()
	{
		foreach (Documentation::getDocVersions() as $versionKey => $versionTitle)
		{
			$this->indexAllDocumentsForVersion($versionKey);
		}

		$this->setSettings();

		$this->client->moveIndex($this->index_tmp->indexName, static::$index_name);
	}

	/**
	 * Index all docs for this version
	 *
	 * @param $version
	 */
	public function indexAllDocumentsForVersion($version)
	{
		foreach ($this->files->files($this->getDocsPath($version)) as $path)
		{
			if (! in_array($this->getSlugFromPath($path), $this->noIndex))
			{
				$this->indexDocument($version, $path);
			}
		}
	}

	public function setSettings()
	{
		$this->index_tmp->setSettings([
			'attributesToIndex'         => ['unordered(h1)', 'unordered(h2)', 'unordered(h3)', 'unordered(h4)', 'unordered(content)'],
			'attributesToHighlight'     => ['h1', 'h2', 'h3', 'h4', 'content'],
			'attributesToRetrieve'      => ['h1', 'h2', 'h3', 'h4', '_tags', 'link'],
			'customRanking'             => ['asc(importance)'],
			'ranking'                   => ['words', 'typo', 'attribute', 'proximity', 'exact', 'custom'],
			'minWordSizefor1Typo'       => 3,
			'minWordSizefor2Typos'      => 7,
			'allowTyposOnNumericTokens' => false,
			'minProximity'              => 2,
			'ignorePlurals'             => true,
			'advancedSyntax'            => true,
			'removeWordsIfNoResults'    => 'allOptional',
		]);

		echo "Set settings of index" . PHP_EOL;
	}

	/**
	 * Index a given document in Algolia
	 *
	 * @param string $version
	 * @param string $path
	 */
	public function indexDocument($version, $path)
	{
		$markdown = Documentation::replaceLinks($version, $this->getFileContents($path));

		$slug = $this->getSlugFromPath($path);

		$blocs = $this->markdown->getBlocks($markdown);

		$markup = [];

		$current_link = $slug;
		$current_h1 = null;
		$current_h2 = null;
		$current_h3 = null;

		$excludedBlocTypes = ['Code', 'Quote', 'Markup', 'FencedCode'];

		foreach ($blocs as $bloc)
		{
			if (isset($bloc['hidden']) || (isset($bloc['type']) && in_array($bloc['type'], $excludedBlocTypes)) || $bloc['element']['name'] == 'ul')
			{
				continue;
			}

			if (isset($bloc['type']) && $bloc['type'] == 'Table')
			{
				foreach ($bloc['element']['text'][1]['text'] as $tr)
				{
					$markup[] = $this->getObject($tr['text'][1], $version, $current_h1, $current_h2, $current_h3, $current_h4, $current_link);
				}

				continue;
			}

			if (isset($bloc['type']) && $bloc['type'] == 'List')
			{
				foreach ($bloc['element']['text'] as $li)
				{
					$li['text'] = $li['text'][0];

					$markup[] = $this->getObject($li, $version, $current_h1, $current_h2, $current_h3, $current_h4, $current_link);
				}

				continue;
			}

			preg_match('/<a name=\"([^\"]*)\">.*<\/a>/iU', $bloc['element']['text'], $link);

			if (count($link) > 0)
			{
				$current_link = $slug . '#' . $link[1];
			}
			else
			{
				$markup[] = $this->getObject($bloc['element'], $version, $current_h1, $current_h2, $current_h3, $current_h4, $current_link);
			}
		}

		$this->index_tmp->addObjects($markup);

		echo "Indexed $version.$slug" . PHP_EOL;
	}

	private function getObject($element, $version, &$current_h1, &$current_h2, &$current_h3, &$current_h4, &$current_link)
	{
		$isContent = true;

		if ($element['name'] == 'h1')
		{
			$current_h1 = $element['text'];
			$current_h2 = null;
			$current_h3 = null;
			$current_h4 = null;
			$isContent = false;
		}

		if ($element['name'] == 'h2')
		{
			$current_h2 = $element['text'];
			$current_h3 = null;
			$current_h4 = null;
			$isContent = false;
		}

		if ($element['name'] == 'h3')
		{
			$current_h3 = $element['text'];
			$current_h4 = null;
			$isContent = false;
		}

		if ($element['name'] == 'h4')
		{
			$current_h4 = $element['text'];
			$isContent = false;
		}

		$importance = $this->tags[$element['name']];

		if ($importance === 4) // Only if it's content
		{
			if ($current_h2 !== null)
			{
				$importance++;
			}

			if ($current_h3 !== null)
			{
				$importance++;
			}

			if ($current_h4 !== null)
			{
				$importance++;
			}
		}

		return [
			'objectID'      => $version.'-'.$current_link.'-'.md5($element['text']),
			'h1'            => $current_h1,
			'h2'            => $current_h2,
			'h3'            => $current_h3,
			'h4'            => $current_h4,
			'link'          => $current_link,
			'content'       => $isContent ? $element['text'] : null,
			'importance'    => $importance,
			'_tags'         => [$version]
		];
	}

	/**
	 * @param string $version
	 * @return string
	 */
	private function getDocsPath($version)
	{
		return base_path('resources/docs/' . $version . '/');
	}

	/**
	 * @param  string $path
	 * @return string
	 * @throws Exception
	 */
	private function getFileContents($path)
	{
		$this->verifyFileExists($path);

		return $this->files->get($path);
	}

	/**
	 * @param  string $path
	 * @throws Exception
	 */
	private function verifyFileExists($path)
	{
		if (! $this->files->exists($path))
		{
			throw new Exception('File does not exist at path: ' . $path);
		}
	}

	/**
	 * @param  string $path
	 * @return string
	 */
	public function getSlugFromPath($path)
	{
		$fileName = last(explode('/', $path));

		return str_replace('.md', '', $fileName);
	}
}