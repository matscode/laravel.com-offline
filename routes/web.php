<?php

/**
 * Set the default documentation version...
 */
define('DEFAULT_VERSION', '5.4');

/**
 * Convert some text to Markdown...
 */
function markdown($text)
{
    return (new ParsedownExtra)->text($text);
}

Route::get('/', function () {
    return view('marketing')->with(['currentVersion' => DEFAULT_VERSION]);
});

Route::get('docs', 'DocsController@showRootPage');
Route::get('docs/{version}/{page?}', 'DocsController@show');

Route::get('partners', function () {
    return view('partners')->with(['currentVersion' => DEFAULT_VERSION]);
});

Route::get('/partner/tighten', function () {
    return view('community-partner-tighten');
});

Route::get('/partner/vehikl', function () {
    return view('community-partner-vehikl');
});
