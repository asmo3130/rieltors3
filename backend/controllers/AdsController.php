<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 03.04.18
 * Time: 14:49
 */

namespace backend\controllers;

use app\models\Ads;
use app\models\Users;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
class AdsController extends Controller
{
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['logout', 'index', 'registered', 'nonregistered', 'confirm'],
//                        'allow' => true,
//                    ],
//                    [
//                        'actions' => ['logout', 'index', 'registered', 'nonregistered', 'confirm'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['nonregistered', 'registered', 'confirm', 'delete'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['nonregistered', 'registered', 'confirm', 'delete '],
                        'allow' => true,
                        'roles' => ['admin'],
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



        public function actionRegistered(){

            $model = new Ads();

            return  $this->render('registered',['model' => $model]);
        }

        public function actionNonregistered(){

            $model = new Ads();

            return $this->render('nonregistered',['model' => $model]);
        }

        public function actionConfirm(){
            $id = $_POST['button'];

            $model  = new Ads();
            $model->doConfirm($id);

            return $this->render('nonregistered',['model' => $model]);
        }

        public function actionDelete(){
            $id = $_POST['button'];

            $model = new Ads();
            $model->doDelete($id);

            return $this->render('nonregistered',['model' => $model]);
        }
}