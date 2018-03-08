<?php

/**
 * Set the default documentation version...
 */
if (! defined('DEFAULT_VERSION')) {
    define('DEFAULT_VERSION', '5.5');
}

Route::get('/', function ($version = DEFAULT_VERSION) {
    // return view('marketing');
    return redirect("/docs/{$version}");
});

Route::get('docs', 'DocsController@showRootPage');
Route::get('docs/{version}/{page?}', 'DocsController@show');

Route::get('apis/{version?}', function ($version = DEFAULT_VERSION) {
    return redirect("/api/{$version}/index.html");
});

Route::get('partners', function () {
    return view('partners');
});

Route::get('/partner/tighten', function () {
    return view('community-partner-tighten');
});

Route::get('/partner/vehikl', function () {
    return view('community-partner-vehikl');
});

Route::get('/partner/kirschbaum-development-group', function () {
    return view('community-partner-kirschbaum');
});

Route::get('/partner/byte5', function () {
    return view('community-partner-byte5');
});

Route::get('/partner/64robots', function () {
    return view('community-partner-64robots');
});

Route::get('/partner/cubet', function () {
    return view('community-partner-cubet');
});
