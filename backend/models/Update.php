<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 04.05.2018
 * Time: 11:28
 */

namespace app\models;


use yii\db\ActiveRecord;
use yii\helpers\Url;

class Update extends ActiveRecord
{
    public static function tableName()
    {
        return "pages"; // тут меняем таблицу с которой будет работать модель
    }

    public function pages()
    {
        $pages = (new \yii\db\Query())
            ->select('*')
            ->from('pages')
            ->all();
        //debug($tables);
        return $pages;
    }

    public function deletes($id, $title, $content){

        Update::updateAll(['content' => $content, 'title' => $title], ['id' => $id]);



        return Url::to(['ads/nonregistered']);
    }
}