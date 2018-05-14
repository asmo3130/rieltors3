<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 25.04.2018
 * Time: 12:57
 */

namespace app\models;

use yii\db\ActiveRecord;

class Area extends ActiveRecord
{
    public static function tableName()
    {
        return 'area_name';
    }

}