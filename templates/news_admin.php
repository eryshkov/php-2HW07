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
    <?php
    $info = $this->info;
    if (isset($info)) {
        ?>
        <div class="row">
            <div class="col-auto">
                <div class="alert alert-danger" role="alert">
                    <?php echo $info; ?>
                </div>
            </div>
        </div>
        <?php
    } ?>
    <div class="row">
        <div class="col">
            <a class="btn btn-outline-primary mb-1" href="/admin/article/insert">Добавить новость</a>
        </div>
    </div>
    <?php
    $dataTable = $dataTableObj->render();
    while ($dataTable->valid()) {
        ?>
        <div class="row mb-1">
            <div class="col-auto">
                <a class="btn btn-outline-info" href="/admin/article/edit/<?php echo $dataTable->current(); ?>">✎</a>
            </div>
            <div class="col-auto">
                <a class="btn btn-outline-danger"
                   href="/admin/article/delete/<?php echo $dataTable->current(); ?>">X</a>
            </div>
            <div class="col">
                <a href="/article/<?php echo $dataTable->current(); ?>">
                    <?php $dataTable->next();
                    echo $dataTable->current();
                    $dataTable->next(); ?>
                </a>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>
