#!/bin/bash
cd /home/forge/laravel.com/resources/docs/5.0 && git pull origin 5.0
cd /home/forge/laravel.com/resources/docs/5.1 && git pull origin 5.1
cd /home/forge/laravel.com/resources/docs/5.2 && git pull origin 5.2
cd /home/forge/laravel.com/resources/docs/5.3 && git pull origin 5.3
cd /home/forge/laravel.com/resources/docs/master && git pull origin master
cd /home/forge/laravel.com && php artisan docs:clear-cache
