<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Filesystem\Filesystem;

class CacheResponse
{
    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Constructor.
     *
     * @var \Illuminate\Filesystem\Filesystem  $files
     */
    public function __construct(Filesystem $files)
    {
        $this->files = $files;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($this->shouldCache($request, $response)) {
            $this->cacheResponse($request, $response);
        }

        return $response;
    }

    /**
     * Determines whether the given request/response should be cached.
     *
     * @param  \Illuminate\Http\Response  $response
     * @return bool
     */
    protected function shouldCache($request, $response)
    {
        return $request->isMethod('GET') && $response->getStatusCode() == 200;
    }

    /**
     * Cache the response to a file.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    protected function cacheResponse($request, $response)
    {
        list($path, $file) = $this->getDirectoryAndFileNames($request);

        $this->files->makeDirectory($path, 0775, true, true);

        $this->files->put($path.$file, $response->getContent());
    }

    /**
     * Get the names of the directory and file.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function getDirectoryAndFileNames($request)
    {
        $segments = explode('/', ltrim($request->getPathInfo(), '/'));

        $file = array_pop($segments).'.html';

        return [$this->getCachePath(implode('/', $segments)), $file];
    }

    /**
     * Get the path to the cache directory.
     *
     * @param  string  $path
     * @return string
     */
    protected function getCachePath($path = '')
    {
        return public_path('page-cache/'.($path ? trim($path, '/').'/' : $path));
    }
}
