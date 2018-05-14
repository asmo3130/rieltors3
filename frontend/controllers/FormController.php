<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 23.04.2018
 * Time: 15:57
 */

namespace frontend\controllers;

use Yii;
use app\models\LeaseForm;

class FormController extends AppController
{

   // public $layout = 'form'; //Установка шаблона для конкретного контроллера

    public function actionIndex()
    {
      if(Yii::$app->request->isAjax)
      {
          return 'test';
      }

      $model = new LeaseForm();
      if ($model->load(Yii::$app->request->post()))
      {
          //debug($model);
         //die;
          if ($model->validate())
          {
              Yii::$app->session->setFlash('success', 'Данные приняты');
              $this->refresh();
          }
          else
          {
              Yii::$app->session->setFlash('error', 'Ошибка');
          }
      }

        $this->view->title = 'Новости';
      return $this->render('index', compact('model'));
    }

    public function actionShow()
    {
        $this->view->title = 'Одна новость';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики....']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'олписание страницы...']);
        return $this->render('show');
    }
}