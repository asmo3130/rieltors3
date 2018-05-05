<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 04.05.2018
 * Time: 11:26
 */

namespace backend\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Update;

class UpdateController extends Controller
{

    public $text;


    public function rules()
    {
        return [
            // тут определяются правила валидации
        ];
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'deletes'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['index', 'deletes'],
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

    public function actionIndex(){
        $model = new Update();

        return $this->render('index', ['model' => $model]);
    }

    public function actionDeletes(){
        $model = new Update();
        $model->deletes($_POST['id'], $_POST['title'], $_POST['content']);

        return $this->render('index', ['model' => $model]);
    }

}