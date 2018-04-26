<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 03.04.18
 * Time: 14:00
 */


use yii\helpers\Html;
$users = $model->getUsers();
$this->title = 'пользователи зарегестрированые';

?>
<div class="site-index">
    <?php
    foreach ($users as $user) :
    ?>
    <div>
        <?echo $user["username"]?>
    </div>
    <? endforeach;?>
</div>
