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

// Route::get('community', function () {
//     return view('community')->with(['currentVersion' => DEFAULT_VERSION]);
// });

// Route::get('community-partner', function () {
//     return view('community-partner')->with(['currentVersion' => DEFAULT_VERSION]);
// });
