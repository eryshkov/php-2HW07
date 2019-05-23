<?php

use App\Models\Article;

require __DIR__ . '/../autoload.php';

foreach (Article::findAll() as $article) {
    var_dump($article);
}
