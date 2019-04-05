<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\Controller;

class Update extends Controller
{
    /**
     * @throws \App\Exceptions\DbErrorException
     * @throws \App\Exceptions\RecordNotFoundException
     * @throws \App\Exceptions\Errors
     */
    protected function handle(): void
    {
        if (isset($_POST['title'], $_POST['content'], $_POST['id'])) {
            $article = \App\Models\Article::findById($_POST['id']);
            if (false === $article) {
                header('Location:' . '/admin');
                exit();
            }
            
            $article->fill($_POST);
            $article->update();
            
            header('Location:' . '/admin');
            return;
        }
    }
}
