<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 03.04.18
 * Time: 14:51
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

$ads = $model::find()->where(['confirmed' => 0])->all();

?>
<?
foreach ($ads as $ad) :
    echo "<pre>";
  //  var_dump($ad);
    echo "</pre>";
?>

<div class="container">
    <div class="row">
        <div class="panel panel-default">


            <div class="panel-heading">
                <h3 class="panel-title">Квартира <?=$ad["id"]; ?>, район <?=$model->getDistrict($ad["rayon"]); ?>, вулиця <?=$model->getStreet($ad["street"]); ?></h3>
            </div>
        <div class="panel-body">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="<?=$ad["photo_upload"];?>" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="caption">
                    <p>
                      <span>Количество комнат: </span>  <?=$ad['rooms'];?>
                    </p>
                    <p>
                        <span>Общая площадь: </span>  <?=$ad['total_area'];?>
                    </p>
                    <p>
                        <span>Площадь кухни: </span>  <?=$ad["kitchen_area"];?>
                    </p>
                    <input type="hidden" name="id" value="<?=$ad['id']?>" placeholder="name">
                    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
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
                    <button class="btn btn-primary" data-toggle="modal" data-target=".id_<?=$ad['id'];?>">Подробнее</button>
                    <button class="btn btn-primary" data-toggle="modal" data-target=".id_red_<?=$ad['id'];?>">Red</button>
                </div>
            </div>


        </div>

            </div>
        </div>
    <div class="modal fade bs-example-modal-lg id_<?=$ad['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="panel-body">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="<?=$ad["photo_upload"];?>" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="caption">
                            <p>
                                <span>Количество комнат: </span>  <?=$ad['rooms'];?>
                            </p>
                            <p>
                                <span>Общая площадь: </span>  <?=$ad['total_area'];?>
                            </p>
                            <p>
                                <span>Площадь кухни: </span>  <?=$ad["kitchen_area"];?>
                            </p>


                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <?
                        Pjax::begin();
                        ?>
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
                            $url = $ad['id'];
                            ?>
<!--                            <a href="--><?//=$url;?><!--" class="btn btn-default btn-lg active comfirm" role="button">Подтвердить</a>-->
                            <button class="btn btn-default btn-lg active confirm" data-button="<?=$url;?>" role="button">Подтвердить</button>
                            <button class="btn btn-default btn-lg active delete" data-button="<?=$url;?>" role="button">Delete</button>
                        </div>
                        <?
                        Pjax::end();
                        ?>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bs-example-modal-lg id_red_<?=$ad['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="panel-body">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="<?=$ad["photo_upload"];?>" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="caption">
                            <form action="updates" method="post">
                            <p>
                                <span>Количество комнат: </span> <input type="text" name="rooms" value="<?=$ad['rooms'];?>">
                            </p>
                            <p>
                                <span>Общая площадь: </span> <input type="text" name="area" value="<?=$ad['total_area'];?>">
                            </p>
                            <p>
                                <span>Площадь кухни: </span>  <input type="text" name="kitchen" value="<?=$ad["kitchen_area"];?>">
                            </p>


                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="caption">
                            <p>
                                <span>Этаж: </span>  <input type="text" name="flor" value="<?=$ad["flors"];?>">
                            </p>
                            <p>
                                <span>Этажей в доме: </span>  <input type="total_flors" name="rooms" value="<?=$ad['total_area'];?>">
                            </p>
                            <p><span>Цена: </span><input type="text" name="price" value="<?=$ad["price"];?>"> UAH </p>
                            <input type="hidden" name="id" value="<?=$ad['id']?>" />
                            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                            <?
                            $url = $ad['id'];
                            ?>
                            <button class="btn btn-default btn-lg active red" type="submit" role="button">Подтвердить</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    </div>
<? endforeach; ?>


