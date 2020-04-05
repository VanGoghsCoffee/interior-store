#!/bin/bash

php artisan migrate:fresh
php artisan serve --host '0.0.0.0'
