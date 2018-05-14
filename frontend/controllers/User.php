<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 26.04.2018
 * Time: 16:33
 */

namespace frontend\controllers;


use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function assingRole($event)
    {
        $user_id=$event->sender->id;

        $auth = Yii::$app->authManager;
        $role = $auth->getRole('user');
        $auth->assign($role, $user_id);

        return true;
    }
}