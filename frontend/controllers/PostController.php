<?php

namespace frontend\controllers;

use frontend\models\post;

class PostController extends \yii\web\Controller
{
    public function actionPost()
    {
        return $this->render('post');
    }
    public function actionIndex(){

        $post = new Post();

        return $this->render('index', [
            'posts' => $post->getPosts(),
        ]);
    }
    public function actionView($url)
    {
        $model = new Post();
        //пост соответствующий переданному url
        $post = $model->getPost($url);

        return $this->render('view', [
            'post' => $post,
        ]);
    }

}
