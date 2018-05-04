<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 04.05.2018
 * Time: 11:28
 */

namespace app\models;


use yii\db\ActiveRecord;

class Update extends ActiveRecord
{
    public function pages()
    {
        $pages = (new \yii\db\Query())
            ->select('*')
            ->from('pages')
            ->all();
        //debug($tables);
        return $pages;
    }
}