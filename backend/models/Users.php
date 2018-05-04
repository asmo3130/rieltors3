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
        $rows = (new \yii\db\Query())  //SELECT * FROM user INNER JOIN auth_assignment d ON id = user_id
            ->select('*')
            ->from('user')
            ->join('INNER JOIN', 'auth_assignment', 'id = user_id')
            ->all();
        return $rows;
    }
}