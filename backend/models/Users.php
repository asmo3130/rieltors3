<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 02.04.18
 * Time: 16:42
 */
namespace app\models;

use yii\base\Model;

class Users extends Model
{
    public function getUsers(){
        $rows = (new \yii\db\Query())
            ->select('*')
            ->from('user')
            ->all();
        return $rows;
    }
}