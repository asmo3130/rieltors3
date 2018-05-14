<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 25.04.2018
 * Time: 13:03
 */
namespace app\models;

use yii\db\ActiveRecord;

class Small extends ActiveRecord
{
    public static function tableName()
    {
        return 'small_area';
    }
}