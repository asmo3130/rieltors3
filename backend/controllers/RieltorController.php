<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 05.05.18
 * Time: 11:57
 */

namespace backend\controllers;


use yii\web\Controller;
use app\models\Rieltor;

class RieltorController extends Controller
{
    public function actionIndex(){
        $model = new Rieltor();

        return $this->render('index', ['model' => $model]);
    }

    public function actionAdd(){
        $model = new Rieltor();

        $model->add($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['area']);

        return $this->render('index', ['model' => $model]);
    }

    public function actionDeletes(){
        $model = new Rieltor();

        $model->deletes($_POST['button']);

        return $this->render('index', ['model' => $model]);
    }

    public function actionUpdate(){
        $model = new Rieltor();

        $model->updates($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['id']);

        return $this->render('index', ['model' => $model]);
    }
}