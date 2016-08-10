#!/bin/bash
base=/home/forge/laravel.com
docs=${base}/resources/docs

cd ${docs}/5.0 && git pull origin 5.0
cd ${docs}/5.1 && git pull origin 5.1
cd ${docs}/5.2 && git pull origin 5.2
cd ${docs}/5.3 && git pull origin 5.3
cd ${docs}/master && git pull origin master

cd $base && php artisan docs:clear-cache
