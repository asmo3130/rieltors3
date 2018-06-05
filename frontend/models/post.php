<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $content
 * @property int $page_id
 * @property string $img
 * @property string $url
 *
 * @property Pages $page
 */
class post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'name', 'content', 'page_id', 'img', 'url'], 'required'],
            [['content', 'img'], 'string'],
            [['page_id'], 'integer'],
            [['title', 'name', 'url'], 'string', 'max' => 255],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pages::className(), 'targetAttribute' => ['page_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'name' => Yii::t('app', 'Name'),
            'content' => Yii::t('app', 'Content'),
            'page_id' => Yii::t('app', 'Page ID'),
            'img' => Yii::t('app', 'Img'),
            'url' => Yii::t('app', 'Url'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Pages::className(), ['id' => 'page_id']);
    }

    public function getPosts(){
        return $this->find()->where(['page_id' => 1])->all();
    }
    /*
     * Возвращает данные для указанного языка
     */
    public function getDataPosts(){
        $language = Yii::$app->language;
        return $language;
    }

    /*
     * Возвращает объект поста по его url
     */
    public function getPost($url){
        return $this->find()->where(['url' => $url])->one();
    }
}
