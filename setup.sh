#!/usr/bin/env sh
URL=https://getcomposer.org/composer.phar

if test -f composer.phar; then
  exit 0
fi

if which wget > /dev/null; then
    wget $URL
elif which curl > /dev/null; then
    curl $URL --remote-name
else
    >&2 echo "cURL or wget not found"
    exit 1
fi

chmod +x composer.phar
