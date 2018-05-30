<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 24.04.2018
 * Time: 17:49
 */

namespace app\models;

use yii\db\ActiveRecord;
use yii\db\Query;

class Filter extends ActiveRecord
{
    public $sity = array();
    public $strit = array();
    public $filter = array();
    public $oblast = array();

    public function FunStr($imet)
    {
        $str = explode(",", $imet);
        $str = str_replace("'", '', $str);

        return $str;
    }

    public function SearchSity()
    {
        $sity = array();
        $tables = (new Query())
            ->select('*')
            ->from('area_name')
            ->all();
        foreach ($tables as $item) {
             $sity[] = $item['name_area'];
        }
        return $sity;
    }

    public function SearchOblast()
    {
        $oblast = array();
        $tables = (new Query())
            ->select('*')
            ->from('lviv_suburbs')
            ->all();
        foreach ($tables as $item) {
            $oblast[] = $item['name'];
        }
        return $oblast;
    }

    public function SearchStrit()
    {
        $strit = array();
        $tables = (new Query())
            ->select('*')
            ->from('small_area')
            ->all();
        foreach ($tables as $item) {
            $strit[] = $item['name'];
        }
        return $strit;
    }

    public function searchFilter()
    {
        $filter = array();
        $tables = (new Query())
            ->select('*')
            ->from('filter')
            ->all();
        foreach ($tables as $item) {
            $filter[] = $item;
        }
        return $filter;
    }

    public function searchresult($data)
    {
        $data[] = $data;

        echo "<pre>";
        var_dump($data);
        echo "</pre>";

        return true;

    }
}