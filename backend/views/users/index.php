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

    <div>
        <?echo "<pre>";
        var_dump($users);
        echo "</pre>";?>
    </div>

</div>
<?php
foreach ($users as $user) :
?>
<div class="container">
    <div class="row">

        <div class="panel panel-default">


<!--            <div class="panel-heading">-->
<!--                <h3 class="panel-title">Квартира --><?////=$ad["id"]; ?><!--, район --><?////=$model->getDistrict($ad["rayon"]); ?><!--, вулиця --><?////=$model->getStreet($ad["street"]); ?><!--</h3>-->
<!--            </div>-->
            <div class="panel-body">
<!--                <div class="col-xs-6 col-md-3">-->
<!--                    <a href="#" class="thumbnail">-->
<!--                        <img src="--><?////=$ad["photo_upload"];?><!--" alt="...">-->
<!--                    </a>-->
<!--                </div>-->
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
                            <p>
                                <input type="text" value="<?=$user["item_name"]?>">
                            </p>
                            <p>
                                <input type="text" value="<?=$user["email"]?>">
                            </p>
                            <p>
                                <input type="text" value="<?=$user["phone"]?>">
                            </p>


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
                            // $url = Url::to(['ads/confirm', 'id' => $ad['id']]);
                            $url = $user['id'];
                            ?>
                            <!--                            <a href="--><?//=$url;?><!--" class="btn btn-default btn-lg active comfirm" role="button">Подтвердить</a>-->
                            <button class="btn btn-default btn-lg active confirm" data-button="<?=$url;?>" role="button">Подтвердить</button>
                            <button class="btn btn-default btn-lg active delete" data-button="<?=$url;?>" role="button">Delete</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<? endforeach;?>