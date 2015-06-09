<?php

require __DIR__.'/../../vendor/autoload.php';

use Sami\Sami;
use Symfony\Component\Finder\Finder;
use Sami\Version\GitVersionCollection;

$iterator = Finder::create()
	->files()
	->name('*.php')
	->exclude('stubs')
	->in($dir = __DIR__.'/laravel/src');

$versions = GitVersionCollection::create($dir)
	->add('5.0', 'Laravel 5.0')
	->add('5.1', 'Laravel 5.1')
	->add('master', 'Laravel Dev');

return new Sami($iterator, array(
	'title' => 'Laravel API',
	'versions' => $versions,
	'build_dir' => __DIR__.'/build/%version%',
	'cache_dir' => __DIR__.'/cache/%version%',
	'default_opened_level' => 2,
));
