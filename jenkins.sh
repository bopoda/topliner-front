#!/usr/bin/env sh

set -e

./setup.sh > /dev/null

# Composer
./bin/composer.sh

./vendor/bin/phpcs --standard=PSR2 src/AppBundle/
