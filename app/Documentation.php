<?php namespace App;

use Illuminate\Contracts\Cache\Cache;
use Illuminate\Contracts\Filesystem\Filesystem;

class Documentation {

	/**
	 * The filesystem implementation.
	 *
	 * @var Filesystem
	 */
	protected $files;

	/**
	 * The cache implementation.
	 *
	 * @var Cache
	 */
	protected $cache;

	/**
	 * Create a new documentation instance.
	 *
	 * @param  Filesystem  $files
	 * @param  Cache  $cache
	 * @return void
	 */
	public function __construct(Filesystem $files, Cache $cache)
	{
		$this->files = $files;
		$this->cache = $cache;
	}

	/**
	 * Get the documentation index page.
	 *
	 * @param  string  $version
	 * @return string
	 */
	public function getIndex($version)
	{
		return $this->cache->remember('docs.'.$version.'.index', 5, function() use ($version) {
			return markdown($this->files->get('resources/docs/'.$version.'/documentation.md'));
		});
	}

	/**
	 * Get the given documentation page.
	 *
	 * @param  string  $version
	 * @param  string  $page
	 * @return string
	 */
	public function get($version, $page)
	{
		return $this->cache->remember('docs.'.$version.'.'.$page, 5, function() use ($version, $page) {
			return markdown($this->files->get('resources/docs/'.$version.'/'.$page.'.md'));
		});
	}

}
