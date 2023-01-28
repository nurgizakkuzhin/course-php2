<?php

require __DIR__ . '/autoload.php';

$articles = \App\Models\Article::findByLast();

include __DIR__ . '/templates/news.php';