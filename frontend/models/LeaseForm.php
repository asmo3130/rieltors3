<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 24.04.2018
 * Time: 14:14
 */

namespace app\models;

use yii\base\Model;

class LeaseForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
             'name' => 'Имя',
             'email' => 'E-mail',
             'text' => 'Текстовое сообщение',

            ];
    }

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'text'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['name', 'string', 'length' => [2,8] ],
            ['text',  'trim'],
        ];
    }
}