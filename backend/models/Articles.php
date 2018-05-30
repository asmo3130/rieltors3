<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 05.05.18
 * Time: 10:28
*/

namespace app\models;


use yii\db\ActiveRecord;
use yii\helpers\Url;

class Articles extends ActiveRecord{

    public static function  tableName(){
        return 'articles';
    }

    public function articles()
    {
        $pages = (new \yii\db\Query())
            ->select('*')
            ->from('articles')
            ->where(['page_id' =>'9'])
            ->all();

        return $pages;
    }

    public function renderArt($id){
        $art = (new \yii\db\Query())
            ->select('*')
            ->from('articles')
            ->where(['id' =>$id])
            ->all();

        return $art;
    }

    public function updates($id, $title, $content){

        Articles::updateAll(['content' => $content, 'title' => $title], ['id' => $id]);

        return true;
    }

    public function upload($img, $id){
        Articles::updateAll(['img' => $img], ['id' => $id]);

        return true;
    }



}