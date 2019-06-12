#!/usr/bin/env sh

set -e

./setup.sh > /dev/null

./vendor/bin/phpcs --standard=PSR2 src/AppBundle/
