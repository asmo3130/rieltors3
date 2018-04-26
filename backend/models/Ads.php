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
use yii\helpers\Url;

class Ads extends ActiveRecord
{
    public static function tableName()
    {
        return "form_fields"; // тут меняем таблицу с которой будет работать модель
    }

    public function getCount(){

    }

    public function getDistrict($dis_id){
        $rayon = "";
        $tables = (new \yii\db\Query())
            ->select('*')
            ->from('area_name')
            ->where(['id' => $dis_id])
            ->all();
        foreach ($tables as $item) {
            $rayon = $item["name_area"];
        }
        //debug($tables);
        return $rayon;
    }

    public function sendMail($status, $id){
        return false;
    }

    public function getStreet($street_id){
        $street = "";

        $tables = (new \yii\db\Query())
            ->select('name')
            ->from('small_area')
            ->where(['id' => $street_id])
            ->all();
        foreach ($tables as $item) {
            $street = $item["name"];
        }
        return $street;
    }

    public function doConfirm($row_id){
        Ads::updateAll(['confirmed' => 1], [ 'id'=> $row_id]);


        return Url::to(['ads/nonregistered']);
    }

    public function doDelete($row_id){

        var_dump($row_id);

        $room = Ads::findOne($row_id);
        $room->deleteAll('id ='.$row_id);

        return true;
    }

}