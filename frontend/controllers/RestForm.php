<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 25.04.2018
 * Time: 17:48
 */

namespace frontend\controllers;


use app\models\Filter;
use yii\web\Controller;

class RestForm extends Controller
{
    public function Search()
    {
        $filter = Filter::findAll(['']);

        return $filter;
    }
}