<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 03.05.2018
 * Time: 10:54
 */

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Query;

class Pages extends ActiveRecord
{

    public function getPosts(){
        return $this->find()->all();
    }
    /*
     * Возвращает данные для указанного языка
     */
    public function getDataPosts(){
        $language = Yii::$app->language;
        $data_lang = $this->getLangPosts()->where(['lang'=>$language])->one();
        return $data_lang;
    }

    /*
     * Возвращает объект поста по его url
     */
    public function getPost($url){
        return $this->find()->where(['url' => $url])->one();
    }
}