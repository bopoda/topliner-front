#!/usr/bin/env bash
set -e

PATH="$PATH:./vendor/bin/"

PHP_BIN="$(which php)"
COMPOSER_BIN="./composer.phar"

if [ ! -f "$COMPOSER_BIN" ]; then
    COMPOSER_BIN="$(which composer)"

    if [ -z "$COMPOSER_BIN" ]; then
        echo "Composer not found please run ./setup.sh"
        exit 1
    fi
fi

"$COMPOSER_BIN" install
