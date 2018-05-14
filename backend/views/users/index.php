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
          <?echo "<pre>";
        var_dump($users);
        echo "</pre>";?>
<?php
foreach ($users as $user) :
?>

<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-xs-6 col-md-3">
                    <div class="caption">
                        <?=$user["username"]?>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="caption">
                        <p>
                            <?=$user["item_name"]?>
                        </p>
                        <p>
                            <?=$user["email"]?>
                        </p>
                        <p>
                            <?=$user["phone"]?>
                        </p>
                        <button class="btn btn-primary" data-toggle="modal" data-target=".id_<?=$user['id'];?>">Подробнее</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-lg id_<?=$user['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="panel-body">

                    <div class="col-xs-6 col-md-3">
                        <div class="caption">
                            <form method="post" class="user_form_<?=$user['id'];?>">
                                <p>
                                    <input type="text" name="name" value="<?=$user["username"]?>">
                                </p>
                                <p>
                                    <input type="text" name="email" value="<?=$user["email"]?>">
                                </p>
                                <p>
                                    <input type="text" name="phone" value="<?=$user["phone"]?>">
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="caption">
                            <p>
                                <span>Этаж: </span>  <?=$ad["flors"];?>
                            </p>
                            <p>
                                <span>Этажей в доме: </span>  <?=$ad["total_floors"];?>
                            </p>
                            <p><span>Цена: </span><?=$ad["price"];?> UAH </p>
                            <?
                            $url = $user['id'];
                            ?>
                            <button class="btn btn-default btn-lg active confirm_user" data-button="<?=$url;?>" role="button">Подтвердить</button>
                            <button class="btn btn-default btn-lg active delete_user" data-button="<?=$url;?>" role="button">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<? endforeach;?>