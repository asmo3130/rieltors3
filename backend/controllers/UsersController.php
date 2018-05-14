<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 03.04.18
 * Time: 13:44
 */

namespace backend\controllers;

use app\models\Users;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

class UsersController extends Controller{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'confirm', 'delete'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'confirm', 'delete'],
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

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $model = new Users();

        return $this->render('index',['model' => $model]);
    }

    public function actionConfirm(){
        $model = new Users();
        $model->confirm();

        return $this->render('index', ['model' => $model]);
    }

    public function actionDelete(){
        $model = new Users();
        $model->deletes($_POST['button']);


        return $this->render('index', ['model' => $model]);
    }

}