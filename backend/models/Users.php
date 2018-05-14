<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 02.04.18
 * Time: 16:42
 */
namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public function getUsers(){
        $rows = (new \yii\db\Query())  //SELECT * FROM user INNER JOIN auth_assignment d ON id = user_id
            ->select('*')
            ->from('user')
            ->join('LEFT JOIN', 'auth_assignment', 'id = user_id')
            ->all();
        return $rows;
    }

    public function confirm(){
        return "test";
    }

    public function deletes($id){

        $room = Users::findOne($id);
        $room->deleteAll('id='.$id);

        return true;
    }
}