#!/bin/bash

cd /home/forge/laravel.com/build/sami

rm -rf /home/forge/laravel.com/build/sami/build
rm -rf /home/forge/laravel.com/build/sami/cache

# Run API Docs
git clone https://github.com/laravel/framework.git /home/forge/laravel.com/build/sami/laravel

php /home/forge/laravel.com/vendor/bin/sami.php update /home/forge/laravel.com/build/sami/sami.php

cp -r /home/forge/laravel.com/build/sami/build/* /home/forge/laravel.com/public/api

rm -rf /home/forge/laravel.com/build/sami/build
rm -rf /home/forge/laravel.com/build/sami/cache

# Cleanup
rm -rf /home/forge/laravel.com/build/sami/laravel
