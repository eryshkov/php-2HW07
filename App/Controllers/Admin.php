<?php

namespace App\Controllers;

use App\AdminDataTable;
use App\Models\Article;

class Admin extends Controller
{
    /**
     * @throws \App\Exceptions\DbErrorException
     */
    protected function handle(): void
    {
        $dataTable = new AdminDataTable(
            Article::getAllLast(),
            [
                function (Article $article) {
                    return $article->id;
                },
                function (Article $article) {
                    return $article->title;
                },
            ]
        );
        $this->view->dataTable = $dataTable;
        $this->view->display(__DIR__ . '/../../templates/news_admin.php');
    }
}
