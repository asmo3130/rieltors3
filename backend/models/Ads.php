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

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        $massage_s = "Обьявление ".$id ." подтвержденно";

        $massage_f = "Обьявление ".$id ." не подтвержденно";

        $massage_d = "Обьявление ".$id ." деактивировано";

        if($status == true){
            mail('nikolay_kolchin@i.ua', 'test', $massage_s, $headers);
        }elseif ($status == false){
            mail('nikolay_kolchin@i.ua', 'test', $massage_f);
        }elseif($status == "deactive"){
            mail('nikolay_kolchin@i.ua', 'test', $massage_d);
        }

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

        $this->sendMail(true, $row_id);

        return Url::to(['ads/nonregistered']);
    }

    public function doDelete($row_id){

        //var_dump($row_id);

        $room = Ads::findOne($row_id);
        $room->deleteAll('id ='.$row_id);

        $this->sendMail(false, $row_id);

        return true;
    }

    public function doDeactive($id){
        Ads::updateAll(['confirmed' => 0], [ 'id'=> $id]);

        $this->sendMail("deactive", $id);

        return true;
    }

    public function updates( $area, $kitchen, $flor, $rooms, $price, $id){
        Ads::updateAll(['price' => $price,
                        'kitchen_area' => $kitchen,
                        'total_area' => $area,
                        'flors' => $flor,
                        ], ['id' => $id]);

        return true;
    }

}