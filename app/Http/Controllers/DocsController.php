<?php namespace App\Http\Controllers;

use App\Documentation;
use Illuminate\Routing\Controller;

class DocsController extends Controller {

	/**
	 * The documentation repository.
	 *
	 * @var Documentation
	 */
	protected $docs;

	/**
	 * Create a new controller instance.
	 *
	 * @param  Documentation  $docs
	 * @return void
	 */
	public function __construct(Documentation $docs)
	{
		$this->docs = $docs;
	}

	/**
	 * Show the root documentation page (/docs).
	 *
	 * @return Response
	 */
	public function showRootPage()
	{
		return redirect(url('docs/'.DEFAULT_VERSION));
	}

	/**
	 * Show a documentation page.
	 *
	 * @return Response
	 */
	public function show($version, $page = null)
	{
		if ( ! $this->isVersion($version)) {
			return redirect(url('docs/'.DEFAULT_VERSION.'/'.$version));
		}

		return view('layouts.docs', [
			'index' => $this->docs->getIndex($version),
			'content' => $this->docs->get($version, $page ?: 'introduction'),
			'currentVersion' => $version,
			'versions' => $this->getDocVersions(),
		]);
	}

	/**
	 * Determine if the given URL segment is a valid version.
	 *
	 * @param  string  $version
	 * @return bool
	 */
	protected function isVersion($version)
	{
		return in_array($version, ['master', '5.0', '4.2', '4.1', '4.0']);
	}

	/**
	 * Get the available documentation versions.
	 *
	 * @return array
	 */
	protected function getDocVersions()
	{
		return [
			'master' => 'Dev',
			'4.2' => '4.2',
			'4.1' => '4.1',
			'4.0' => '4.0',
		];
	}

}
