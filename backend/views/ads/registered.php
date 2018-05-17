<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 03.04.18
 * Time: 14:51
 */

use yii\helpers\Html;
use yii\widgets\Pjax;

$ads = $model::find()->where(['confirmed' => 1])->all();

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
                            <div class="caption">
                                <p>
                                    <span>Этаж: </span>  <?=$ad["flors"];?>
                                </p>
                                <p>
                                    <span>Этажей в доме: </span>  <?=$ad["total_floors"];?>
                                </p>
                                <p><span>Цена: </span><?=$ad["price"];?> UAH </p>
                                <a href="confirm/?id=<?=$ad['id'];?>" class="btn btn-default btn-lg active" role="button">Подтвердить</a>
                                <button class="btn btn-default btn-lg deactive" data-button="<?=$ad['id'];?>" role="button">deactive</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? endforeach; ?>


