<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 23.04.2018
 * Time: 15:14
 */

namespace frontend\controllers;

use app\models\Filter;
use frontend\models\FilterForm;

class FilterController extends AppController
{

    public function actionIndex()
    {
        $model = new Filter();

        $question_cat = new Filter();
        $question_cat->sity = $model->sity;
        $question_cat->strit = $model->strit;
        $question_cat->oblast = $model->oblast;

        return $this->render('index', ['model' => $model]);
    }

    public function actionFilter()
    {
        $model = new Filter();
        $model->searchstrit($_POST['cat']);

        return $this->render('index', ['model' => $model]);
    }

    public function actionResult(){

        $model = new Filter();
        $model->searchResult($_POST);

        return $this->render('index', ['model' => $model]);
    }

    public function actionOblast(){

        $model = new Filter();
        $model->actionOblast($_POST);

        return $this->render('index', ['model' => $model]);
    }

}