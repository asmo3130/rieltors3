<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 04.05.2018
 * Time: 11:29
 */

$pages = $model->pages();
?>
<?php foreach ($pages as $page) :?>
<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                                <h3 class="panel-title"><?=$page['title']?></h3>
                            </div>
            <div class="panel-body">
                <div class="col-xs-6 col-md-3">
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="caption">
                        <p>
                            <?=$page["content"]?>
                        </p>
                        <button class="btn btn-primary" data-toggle="modal" data-target=".id_<?=$page['id'];?>">Редактировать</button>
                    </div>
                </div>


            </div>

        </div>


    </div>
    <div class="modal fade bs-example-modal-lg id_<?=$page['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="panel-body">

                    <div class="col-xs-6 col-md-3">
                        <div class="caption">
                            <p>
                                <input type="text" value="<?=$page["title"]?>">
                            </p>
                            <p>
                                <input type="text" value="<?=$page["content"]?>">
                            </p>
                            <p>
                                <input type="text" value="<?//=$user["phone"]?>">
                            </p>


                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="caption">
                            <p>
                                <span>Этаж: </span>  <?//=//$ad["flors"];?>
                            </p>
                            <p>
                                <span>Этажей в доме: </span>  <?//=//$ad["total_floors"];?>
                            </p>
                            <p><span>Цена: </span><?//=//$ad["price"];?> UAH </p>
                            <?
                            // $url = Url::to(['ads/confirm', 'id' => $ad['id']]);
                           // $url = $user['id'];
                            ?>
                            <!--                            <a href="--><?//=$url;?><!--" class="btn btn-default btn-lg active comfirm" role="button">Подтвердить</a>-->
                            <button class="btn btn-default btn-lg active confirm_page" data-button="<?//=//$url;?>" role="button">Подтвердить</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>