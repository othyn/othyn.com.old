#!/bin/bash
echo '>>> othyn.com project installer starting'

echo '>>> Running composer install'
composer install

echo '>>> Running yarn install'
yarn install

echo '>>> Make homestead'
php vendor/bin/homestead make

echo '>>> Make .env'
cp .env.example .env
php artisan key:generate

echo '>>> Done!'
