<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 23.04.2018
 * Time: 15:25
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\Select2;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>фильтр</title>
</head>
<body>
<?php $sityS = $model::searchSity(); ?>
<?php $stritS = $model::searchStrit(); ?>
<?php $filter = $model::searchFilter(); ?>
<?php $action =  Url::to("result"); ?>
<?php $oblast = $model::SearchOblast(); ?>

<?php // debug($oblast) ?>

<?php /*echo '<label class="control-label">Tag Single</label>';
echo Select2::widget([
'name' => 'color_3',
'value' => 'red', // initial value
'data' => $data,
'options' => ['placeholder' => 'Select a color ...'],
'pluginOptions' => [
'tags' => true,
'tokenSeparators' => [',', ' '],
'maximumInputLength' => 10
],
]);
*/?>

<div id="tabs">
    <div class="tab whiteborder">Квартира</div>
    <div class="tab">Дом</div>
    <div class="tab">Земля</div>
    <div class="tabContent">
        <?php $form = ActiveForm::begin(['id' => 'test-form', 'action' => [$action], 'method' => 'POST'])?>

        <?php
        $params = [
            'prompt' => 'Выберите месторасположене',
        ];
        echo $form->field($model, 'lviv_sections')->dropDownList($model->FunStr($filter[0]['lviv_sections']),$params)->label('Выберите месторасположене'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите область',
        ];
        echo $form->field($model, 'oblast')->dropDownList($oblast,$params)->label('Выберите область'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите район',
        ];
        echo $form->field($model, 'sity')->dropDownList($sityS,$params)->label('Выберите район'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите улицу',
        ];
        echo $form->field($model, 'strit')->dropDownList($stritS,$params)->label('Выберите улицу'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите стоимость от',
        ];
        echo $form->field($model, 'price_from')->dropDownList($model->FunStr($filter[0]['price_from']),$params)->label('Выберите стоимость от'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите стоимость до',
        ];
        echo $form->field($model, 'price_to')->dropDownList($model->FunStr($filter[0]['price_to']),$params)->label('Выберите стоимость до'); ?>

        <?php
        $params = [
            'prompt' => 'Колиство комнат',
        ];
        echo $form->field($model, 'rooms')->dropDownList($model->FunStr($filter[0]['rooms']),$params)->label('выберите количество комнат'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите площадь от',
        ];
        echo $form->field($model, 'area_from')->dropDownList($model->FunStr($filter[0]['area_from']),$params)->label('Площадь от'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите площадь до',
        ];
        echo $form->field($model, 'area_to')->dropDownList($model->FunStr($filter[0]['area_to']),$params)->label('Площадь до'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите площадь кухни от',
        ];
        echo $form->field($model, 'kitchen_area_from')->dropDownList($model->FunStr($filter[0]['kitchen_area_from']),$params)->label('Площадь кухни от'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите площадь кухни до',
        ];
        echo $form->field($model, 'kitchen_area_to')->dropDownList($model->FunStr($filter[0]['kitchen_area_to']),$params)->label('Площадь кухни до'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите тип дома',
        ];
        echo $form->field($model, 'house_type')->dropDownList($model->FunStr($filter[0]['house_type']),$params)->label('Тип дома'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите тип отопления',
        ];
        echo $form->field($model, 'heating')->dropDownList($model->FunStr($filter[0]['heating']),$params)->label('Выберите тип отопления'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите год постройки',
        ];
        echo $form->field($model, 'year')->dropDownList($model->FunStr($filter[0]['year']),$params)->label('Выберите год постройки'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите этаж',
        ];
        echo $form->field($model, 'floars')->dropDownList($model->FunStr($filter[0]['floars']),$params)->label('Выберите этаж'); ?>

        <input name="che" type="checkbox" value="qwe"><span>Не первый</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Не последний</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Только первый</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Только последний</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Мебель</span><br>
        <input name="che" type="checkbox" value="qwe"><span>С ремонтом</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Без ремонта</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Бытовая техника</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Телевизор</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Близко к остановке</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Балкон</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Подземная парковка</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Парковка возле дома</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Кладовка/Подвал</span><br>

        <?php echo Html::submitButton('Найти', ['class' => 'btn btn-success']) ?>
        <?php ActiveForm::end() ?>
    </div>
    <div class="tabContent">
        <?php $form = ActiveForm::begin(['id' => 'test-form', 'action' => [$action], 'method' => 'POST'])?>
        <?php

        $items = ArrayHelper::map($sityS,'id','name_area');

        echo Html::dropDownList('cat','nuul',$items, ['id' => 'test']);
        ?>
        <?php
        $params = [
            'prompt' => 'Выберите улицу',
        ];
        echo $form->field($model, 'strit')->dropDownList($stritS,$params)->label('Выберите улицу'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите стоимость от',
        ];
        echo $form->field($model, 'price_from')->dropDownList($model->FunStr($filter[0]['price_from']),$params)->label('Выберите стоимость от'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите стоимость до',
        ];
        echo $form->field($model, 'price_to')->dropDownList($model->FunStr($filter[0]['price_to']),$params)->label('Выберите стоимость до'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите площадь от',
        ];
        echo $form->field($model, 'area_from')->dropDownList($model->FunStr($filter[0]['area_from']),$params)->label('Площадь от'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите площадь до',
        ];
        echo $form->field($model, 'area_to')->dropDownList($model->FunStr($filter[0]['area_to']),$params)->label('Площадь до'); ?>

        <?php
        $params = [
            'prompt' => 'Колиство комнат',
        ];
        echo $form->field($model, 'rooms')->dropDownList($model->FunStr($filter[0]['rooms']),$params)->label('выберите количество комнат'); ?>

        <?php
        $params = [
            'prompt' => 'Тип крыши',
        ];
        echo $form->field($model, 'roof')->dropDownList($model->FunStr($filter[0]['roof']),$params)->label('Выберите тип крыши'); ?>


        <?php
        $params = [
            'prompt' => 'Выберите площадь кухни от',
        ];
        echo $form->field($model, 'kitchen_area_from')->dropDownList($model->FunStr($filter[0]['kitchen_area_from']),$params)->label('Площадь кухни от'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите площадь кухни до',
        ];
        echo $form->field($model, 'kitchen_area_to')->dropDownList($model->FunStr($filter[0]['kitchen_area_to']),$params)->label('Площадь кухни до'); ?>

        <?php
        $params = [
            'prompt' => 'Площадь участка от',
        ];
        echo $form->field($model, 'homestead_from')->dropDownList($model->FunStr($filter[0]['homestead_from']),$params)->label('Выберите площадь участка от'); ?>

        <?php
        $params = [
            'prompt' => 'Площадь участка до',
        ];
        echo $form->field($model, 'homestead_to')->dropDownList($model->FunStr($filter[0]['homestead_to']),$params)->label('Выберите площадь участка до'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите тип стен',
        ];
        echo $form->field($model, 'walls')->dropDownList($model->FunStr($filter[0]['walls']),$params)->label('Тип стен'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите тип отопления',
        ];
        echo $form->field($model, 'heating')->dropDownList($model->FunStr($filter[0]['heating']),$params)->label('Выберите тип отопления'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите тип стен',
        ];
        echo $form->field($model, 'walls')->dropDownList($model->FunStr($filter[0]['walls']),$params)->label('Выберите тип стен'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите год постройки',
        ];
        echo $form->field($model, 'year')->dropDownList($model->FunStr($filter[0]['year']),$params)->label('Выберите год постройки'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите этаж',
        ];
        echo $form->field($model, 'floars')->dropDownList($model->FunStr($filter[0]['floars']),$params)->label('Выберите этаж'); ?>

        <input name="che" type="checkbox" value="qwe"><span>Посуточно</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Дачный дом</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Только с фото</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Только с видео</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Дачный дом</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Мебель</span><br>
        <input name="che" type="checkbox" value="qwe"><span>С ремонтом</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Без ремонта</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Близко к остановке</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Гараж</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Басейн</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Камин</span><br>

        <?php echo Html::submitButton('Найти', ['class' => 'btn btn-success']) ?>
        <?php ActiveForm::end() ?>
    </div>
    <div class="tabContent">
        <?php $form = ActiveForm::begin(['id' => 'test-form', 'action' => [$action], 'method' => 'POST'])?>
        <?php

        $items = ArrayHelper::map($sityS,'id','name_area');

        echo Html::dropDownList('cat','nuul',$items, ['id' => 'test']);
        ?>
        <?php
        $params = [
            'prompt' => 'Выберите улицу',
        ];
        echo $form->field($model, 'strit')->dropDownList($stritS,$params)->label('Выберите улицу'); ?>

        <?php
        $params = [
            'prompt' => 'Площадь участка от',
        ];
        echo $form->field($model, 'land_area')->dropDownList($model->FunStr($filter[0]['land_area']),$params)->label('Выберите площадь участка от'); ?>

        <?php
        $params = [
            'prompt' => 'Площадь участка до',
        ];
        echo $form->field($model, 'land_area_to')->dropDownList($model->FunStr($filter[0]['land_area_to']),$params)->label('Выберите площадь участка до'); ?>
        <?php
        $params = [
            'prompt' => 'Цена за месяц от',
        ];
        echo $form->field($model, 'price_per_month')->dropDownList($model->FunStr($filter[0]['price_per_month']),$params)->label('Выберите стоимость участка'); ?>
        <?php
        $params = [
            'prompt' => 'Цена за месяц до',
        ];
        echo $form->field($model, 'price_per_month_to')->dropDownList($model->FunStr($filter[0]['price_per_month_to']),$params)->label('Выберите стоимость участка'); ?>


        <input name="che" type="checkbox" value="qwe"><span>Только с фото</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Только с видео</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Центральная дорога рядом</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Дом под снос</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Под застройку</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Сельскохозяйственного назначения</span><br>
        <input name="che" type="checkbox" value="qwe"><span>В пределах населенного пункта</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Вымощена дорога к участку</span><br>
        <input name="che" type="checkbox" value="qwe"><span>Наличие коммуникаций </span><br>

        <?php echo Html::submitButton('Найти', ['class' => 'btn btn-success']) ?>
        <?php ActiveForm::end() ?>
    </div>
</div>

</body>
</html>
