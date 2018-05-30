<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 05.05.18
 * Time: 11:58
 */

namespace app\models;

use yii\db\ActiveRecord;

class Rieltor extends ActiveRecord{

    public static function  tableName(){
        return 'rieltor';
    }

    public function Rieltor(){
        $rieltors = (new \yii\db\Query())
            ->select('*')
            ->from('rieltor')
            ->all();

        return $rieltors;
    }

    public function getArea(){
        $rieltors = (new \yii\db\Query())
            ->select('*')
            ->from('area_name')
            ->all();

        return $rieltors;
    }

    public function add($name, $phone, $email, $area, $img){

        $rieltor = new Rieltor();
        $rieltor->name = $name;
        $rieltor->phone = $phone;
        $rieltor->email = $email;
        $rieltor->area = $area;
        $rieltor->img = $img;
        $rieltor->insert();

        return true;
    }

    public function deletes($id)
    {
        $room = Rieltor::findOne($id);
        $room->deleteAll('id='.$id);

        //var_dump(Rieltor::deleteAll(['id='.$id]));

        return true;
    }

    public function updates($name, $phone, $email, $id)
    {
       // var_dump($name);

        Rieltor::updateAll(['name'=>$name, 'phone'=>$phone,'email'=>$email],['id'=>$id]);

        return true;
    }
}