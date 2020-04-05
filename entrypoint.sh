#!/bin/bash

sleep 5s
php artisan migrate:fresh
php artisan serve --host '0.0.0.0'
