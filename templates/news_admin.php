<?php
/**
 * @var \App\View $this
 */

use App\AdminDataTable;
use App\Models\Article;

$dataTableObj = new AdminDataTable(
    $this->articles,
    [
        function (Article $article) {
            return $article->id;
        },
        function (Article $article) {
            return $article->title;
        },
    ]
);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <title>Site</title>
</head>
<body>
<div class="container">
    <div class="row" id="menu">
        <div class="col">
            <a href="/" class="btn btn-outline-success">Новости</a>
            <a href="/tests/" class="btn btn-outline-success">Тесты</a>
            <a href="/admin" class="btn btn-outline-success">Админ-Новости</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-outline-primary mb-1" href="/admin/article/insert">Добавить новость</a>
        </div>
    </div>
    <?php
    echo $dataTableObj->render(__DIR__ . '/admin_table.php');
    ?>
</div>
</body>
</html>
