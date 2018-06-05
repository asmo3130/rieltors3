<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 03.05.2018
 * Time: 10:53
 */

namespace frontend\controllers;

use app\models\Pages;
use app\models\Filter;
use yii\web\Controller;
use frontend\models\Articles;

class PagesController extends Controller
{
    public function actionIndex()
    {
        $model = new Pages();
        return $this->render('index',['model' => $model]);
    }

    public function actionServices()
    {
        $model = new Pages();

        return $this->render('services', ['model' => $model]);
    }

    public function actionArticle()
    {
        $model = new Pages();

        return $this->render('article', ['model' => $model]);
    }
    public function actionSpesial()
    {
        $model = new Pages();

        return $this->render('spesial', ['model' => $model]);
    }
}