#!/bin/bash
base=/home/forge/laravel.com
sami=${base}/build/sami

cd $sami
composer update

# Cleanup Before
rm -rf ${sami}/build
rm -rf ${sami}/cache
rm -rf ${sami}/laravel

# Run API Docs
git clone https://github.com/laravel/framework.git ${sami}/laravel

${sami}/vendor/bin/sami.php update ${sami}/sami.php

cp -r ${sami}/build/* ${base}/public/api

# Cleanup After
rm -rf ${sami}/build
rm -rf ${sami}/cache
rm -rf ${sami}/laravel
