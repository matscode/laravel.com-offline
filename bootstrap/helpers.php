<?php

/**
 * SVG helper
 *
 * @param string $src Path to svg in the cp image directory
 * @return string
 */
function svg($src)
{
    return file_get_contents(public_path('assets/svg/' . $src . '.svg'));
}

/**
 * Convert some text to Markdown...
 */
function markdown($text)
{
    return (new ParsedownExtra)->text($text);
}
