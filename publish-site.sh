#!/bin/sh

php index.php >| ../gh-pages/index.html
php rss.php >| ../gh-pages/feed.rss

