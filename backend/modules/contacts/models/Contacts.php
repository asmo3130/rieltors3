<?php

namespace backend\modules\contacts\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property string $adress
 * @property string $phone
 * @property string $email
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adress', 'phone', 'email'], 'required'],
            [['adress', 'phone', 'email',], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adress' => 'Adress',
            'phone' => 'Phone',
            'email' => 'Email',
        ];
    }
}
