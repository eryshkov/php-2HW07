<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\BaseController;

class Insert extends BaseController
{
    protected function handle(): void
    {
        $this->view->display(__DIR__ . '/../../../../templates/news_create.php');
    }
}
