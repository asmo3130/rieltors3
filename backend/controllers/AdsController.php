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
class AdsController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['nonregistered', 'registered', 'confirm', 'delete', 'deactive', 'updates'],
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

        public function actionDeactive(){
            $id = $_POST['button'];

            $model = new Ads();
            $model->doDeactive($id);

            return $this->render('registered',['model' => $model]);
        }

        public function actionUpdates(){

            $model = new Ads();
            $model->updates($_POST['area'],$_POST['kitchen'],$_POST['flor'],$_POST['rooms'],$_POST['price'], $_POST['id']);

            return $this->render('nonregistered',['model' => $model]);
        }
}