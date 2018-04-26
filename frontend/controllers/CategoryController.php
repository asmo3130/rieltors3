<?php
namespace app\models; // подключаем пространство имён
use yii\db\ActiveRecord; // подключаем класс ActiveRecord

class Сategory extends ActiveRecord // расширяем класс ActiveRecord
{
    public static function tableName()
    {
        return "area_name"; // тут меняем таблицу с которой будет работать модель
    }
}