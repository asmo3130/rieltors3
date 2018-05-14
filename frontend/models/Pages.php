<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 03.05.2018
 * Time: 10:54
 */

namespace app\models;

use yii\db\ActiveRecord;
use yii\db\Query;

class Pages extends ActiveRecord
{
    public $services = array();
    public $careers = array();
    public $about = array();
    public $news = array();
    public $spesial = array();
    public $contacts = array();
    public $sell = array();
    public $aboutstay = array();
    public $servicesstaty = array();
    public $article = array();
    public $articles = array();
    public $newsstay = array();
    public $careersstay = array();
    public $spesialstay = array();

    public function Services()
    {

        $tables = (new Query())
            ->select('content')
            ->where(['name' => 'services'])
            ->from('pages')
            ->all();
        foreach ($tables as $item)
        {
            $services[] = $item['content'] ;
        }

        return $services;
    }

    public function ServicesStaty()
    {
        $tables = (new Query())
            ->from('articles')
            ->where(['page_id' => '2'])
            ->all();
        foreach ($tables as $item)
        {
            $servicesstaty[] = $item ;
        }

        return $servicesstaty;
    }

    public function Article()
    {
        $tables = (new Query())
            ->from('pages')
            ->where(['name' => 'article'])
            ->all();
        foreach ($tables as $item)
        {
            $article[] = $item['content'] ;
        }

        return $article;
    }

    public function ArticleStay()
    {
        $tables = (new Query())
            ->select('*')
            ->from('articles')
            ->where(['page_id' => '9'])
            ->all();
        foreach ($tables as $item)
        {
            $articles[] = $item ;
        }

        return $articles;
    }

    public function Careers()
    {

        $tables = (new Query())
            ->select('content')
            ->where(['name' => 'careers'])
            ->from('pages')
            ->all();
        foreach ($tables as $item)
        {
            $careers[] = $item['content'] ;
        }

        return $careers;
    }

    public function CareersStay()
    {

        $tables = (new Query())
            ->select('*')
            ->where(['page_id' => '3'])
            ->from('articles')
            ->all();
        foreach ($tables as $item)
        {
            $careersstay[] = $item ;
        }

        return $careersstay;
    }

    public function About()
    {

        $tables = (new Query())
            ->select('content')
            ->where(['name' => 'about'])
            ->from('pages')
            ->all();
        foreach ($tables as $item)
        {
            $about[] = $item['content'] ;
        }

        return $about;
    }

    public function AboutStaty()
    {
        $tables = (new Query())
            ->select('*')
            ->from('articles')
            ->where(['page_id' => '1'])
            ->all();
        foreach ($tables as $item)
        {
            $aboutstay[] = $item ;
        }

        return $aboutstay;
    }

    public function News()
    {

        $tables = (new Query())
            ->select('content')
            ->where(['name' => 'news'])
            ->from('pages')
            ->all();
        foreach ($tables as $item)
        {
            $news[] = $item['content'] ;
        }

        return $news;
    }

    public function NewsStay()
    {

        $tables = (new Query())
            ->select('*')
            ->where(['page_id' => '6'])
            ->from('articles')
            ->all();
        foreach ($tables as $item)
        {
            $newsstay[] = $item ;
        }

        return $newsstay;
    }

    public function Spesial()
    {

        $tables = (new Query())
            ->select('content')
            ->where(['name' => 'spesial'])
            ->from('pages')
            ->all();
        foreach ($tables as $item)
        {
            $spesial[] = $item['content'] ;
        }

        return $spesial;
    }

    public function SpesialStay()
    {

        $tables = (new Query())
            ->select('*')
            ->where(['page_id' => '5'])
            ->from('articles')
            ->all();
        foreach ($tables as $item)
        {
            $spesialstay[] = $item ;
        }

        return $spesialstay;
    }

    public function Contacts()
    {

        $tables = (new Query())
            ->select('content')
            ->where(['name' => 'contacts'])
            ->from('pages')
            ->all();
        foreach ($tables as $item)
        {
            $contacts[] = $item['content'] ;
        }

        return $contacts;
    }

    public function Sell()
    {

        $tables = (new Query())
            ->select('content')
            ->where(['name' => 'sell'])
            ->from('pages')
            ->all();
        foreach ($tables as $item)
        {
            $sell[] = $item['content'] ;
        }

        return $sell;
    }
}