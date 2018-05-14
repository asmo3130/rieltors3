<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 03.05.2018
 * Time: 10:53
 */

namespace frontend\controllers;


use yii\rest\Controller;

class RealController extends Controller
{
    public function actionIndex()
    {
        $model = new Real();

        return $this->render('index', ['model' => $model]);

    }
}