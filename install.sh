#!/bin/bash
# Installation steps for project installations
echo '[othyn.com: Project installation]'
echo '> Beginning installation!'

# Step 0
# Get the script directory, just so this can be run from anywhere
CURRENT_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
cd "$CURRENT_DIR"
echo "> Script directory set to '$CURRENT_DIR'."

# Step 1
# Install PHP dependencies
echo '> Running composer install'
composer install

# Step 2
# Install JS dependencies
echo '> Running yarn install'
yarn install

# Step 3
# Setup .env
echo '> Make .env'
cp .env.example .env
php artisan key:generate

# Step 4
# Setup Docker
echo '> Running Docker install'
git submodule init
git submodule update
docker/install.existing.sh

# Step Done!
# That's it! Magic. 🎉
echo '> Installation complete!'
