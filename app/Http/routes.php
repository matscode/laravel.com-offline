<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
 * Set the default documentation version...
 */
define('DEFAULT_VERSION', '4.2');

/**
 * Convert some text to Markdown...
 */
function markdown($text) {
	return (new Parsedown)->text($text);
}

/**
 * Root route...
 */
get('/', function() {
	return view('index');
});

/**
 * Documentation routes...
 */
get('docs', 'DocsController@showRootPage');
get('docs/{version}/{page?}', 'DocsController@show');
