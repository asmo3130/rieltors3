<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 22.05.18
 * Time: 16:18
 */

namespace backend\controllers;
require "../functions.php";


use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Action;

class VacanciesController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'add', 'edit'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex(){
        $model = new Action();

        return $this->render('index', ['model' => $model]);

    }

    public function actionEdit(){
        $model = new Action();
        $model->edit($_POST['url']);


        return $this->render($_POST['url'] , ['model' => $model]);
    }

    public function actionAdd(){
        // var_dump($_POST);
        $model = new Action();
        $uri = translit($_POST['name']);

        $model->add($_POST['name'], $uri);
        return $this->render('index', ['model' => $model]);
    }

}