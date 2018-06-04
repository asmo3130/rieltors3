<?php

namespace backend\modules\actions\models;

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
class Articles extends \yii\db\ActiveRecord
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
            [['page_id'], 'integer', 'max'=> 11],
            [['title', 'name', 'url'], 'string', 'max' => 255],
           // [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Articles::className(), 'targetAttribute' => ['page_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'name' => 'Name',
            'content' => 'Content',
            'page_id' => 'Page ID',
            'img' => 'Img',
            'url' => 'Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Articles::className(), ['id' => 'page_id']);
    }

    public function getPageNames(){
        $tables = (new \yii\db\Query())
            ->select('*')
            ->from('pages')
            ->all();

        return $tables;
    }
}
