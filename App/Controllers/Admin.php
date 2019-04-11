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
        $this->view->articles = Article::getAllLast();
        $this->view->display(__DIR__ . '/../../templates/news_admin.php');
    }
}
