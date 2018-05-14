<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 03.05.2018
 * Time: 10:53
 */

namespace frontend\controllers;

use app\models\Pages;
use yii\web\Controller;

class PagesController extends Controller
{
    public function actionIndex()
    {
       return $this->render('index');
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
    public function actionA1()
    {
        $model = new Pages();

        return $this->render('a1', ['model' => $model]);
    }
    public function actionA2()
    {
        $model = new Pages();

        return $this->render('a2', ['model' => $model]);
    }
    public function actionA3()
    {
        $model = new Pages();

        return $this->render('a3', ['model' => $model]);
    }
    public function actionA4()
    {
        $model = new Pages();

        return $this->render('a4', ['model' => $model]);
    }
    public function actionA5()
    {
        $model = new Pages();

        return $this->render('a5', ['model' => $model]);
    }

    public function actionCareers()
    {
        $model = new Pages();

        return $this->render('careers', ['model' => $model]);
    }

    public function actionAbout()
    {
        $model = new Pages();

        return $this->render('about', ['model' => $model]);
    }

    public function actionNews()
    {
        $model = new Pages();

        return $this->render('news', ['model' => $model]);
    }

    public function actionSpesial()
    {
        $model = new Pages();

        return $this->render('spesial', ['model' => $model]);
    }

    public function actionContacts()
    {
        $model = new Pages();

        return $this->render('contacts', ['model' => $model]);
    }

    public function actionSell()
    {
        $model = new Pages();

        return $this->render('sell', ['model' => $model]);
    }

    public function actionAboutst()
    {
        $model = new Pages();

        return $this->render('aboutst', ['model' => $model]);
    }

    public function actionT1()
    {
        $model = new Pages();

        return $this->render('t1', ['model' => $model]);
    }
    public function actionT2()
    {
        $model = new Pages();

        return $this->render('t2', ['model' => $model]);
    }
    public function actionT3()
    {
        $model = new Pages();

        return $this->render('t3', ['model' => $model]);
    }
    public function actionT4()
    {
        $model = new Pages();

        return $this->render('t4', ['model' => $model]);
    }
    public function actionT5()
    {
        $model = new Pages();

        return $this->render('t5', ['model' => $model]);
    }
    public function actionT6()
    {
        $model = new Pages();

        return $this->render('t6', ['model' => $model]);
    }
    public function actionT7()
    {
        $model = new Pages();

        return $this->render('t7', ['model' => $model]);
    }
    public function actionS1()
    {
        $model = new Pages();

        return $this->render('s1', ['model' => $model]);
    }
    public function actionS2()
    {
        $model = new Pages();

        return $this->render('s2', ['model' => $model]);
    }
    public function actionS3()
    {
        $model = new Pages();

        return $this->render('s3', ['model' => $model]);
    }
    public function actionS4()
    {
        $model = new Pages();

        return $this->render('s4', ['model' => $model]);
    }
    public function actionS5()
    {
        $model = new Pages();

        return $this->render('s5', ['model' => $model]);
    }
    public function actionS6()
    {
        $model = new Pages();

        return $this->render('s6', ['model' => $model]);
    }
    public function actionS7()
    {
        $model = new Pages();

        return $this->render('s7', ['model' => $model]);
    }
}