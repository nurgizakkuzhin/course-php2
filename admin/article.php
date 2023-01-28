<?php
require __DIR__ . '/../autoload.php';

use \App\Models\Article;

$article = Article::findById($_GET['id']);

include __DIR__ . '/../templates/admin/article.php';