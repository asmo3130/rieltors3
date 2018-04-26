<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 02.04.18
 * Time: 13:56
 */

namespace frontend\models;

use Yii;
use yii\base\Model;

class Filter extends Model
{
    public $rayon;
    public $rooms_count;
    public $street;
    public $prise;
    public $total_area;
    public $living_area;
    public $kitchen_area;
    public $type_house;
    public $type_of_heating;
    public $walls;
    public $year_building;
    public $total_floors;
    public $description;
    public $name;
    public $last_name;
    public $phone;
    public $email;
    public $photo_upload;
    public $loading_plan;


    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'last_name'], 'required', 'message' => 'Не заполненно поле'],
            ['email', 'email', 'message' => 'Некорректный e-mail адресс']
        ];
    }
}
