#!/usr/bin/env sh

set -e

./setup.sh > /dev/null

# Composer
./bin/composer.sh

./vendor/bin/phpcs \
    --report=checkstyle \
    --report-file=phpcs.checkstyle.xml \
    src/AppBundle

./vendor/bin/phpcs \
    --report=checkstyle \
    --report-file=findbugs.xml \
    src/AppBundle

./vendor/bin/phpcs --standard=PSR2 src/AppBundle/

