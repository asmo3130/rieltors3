<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 05.05.18
 * Time: 10:28
 */

namespace backend\controllers;


use app\models\Articles;
use yii\web\Controller;

class ArticlesController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'image-upload' => [
                'class' => 'vova07\imperavi\actions\UploadAction',
                'url' => '/images/blog/', // Directory URL address, where files are stored.
                'path' => '@webroot/images/blog/' // Or absolute path to directory where files are stored.
            ],
            'images-get' => [
                'class' => 'vova07\imperavi\actions\GetAction',
                'url' => '/images/blog/', // Directory URL address, where files are stored.
                'path' => '@webroot/images/blog/', // Or absolute path to directory where files are stored.
                'type' => '0',
            ],
            'files-get' => [
                'class' => 'vova07\imperavi\actions\GetAction',
                'url' => '/files/blog/', // Directory URL address, where files are stored.
                'path' => '@webroot/files/blog/', // Or absolute path to directory where files are stored.
                'type' => '1',//GetAction::TYPE_FILES,
            ],
            'file-upload' => [
                'class' => 'vova07\imperavi\actions\UploadAction',
                'url' => '/files/blog/', // Directory URL address, where files are stored.
                'path' => '@webroot/files/blog/' // Or absolute path to directory where files are stored.
            ],
        ];
    }
    public function actionIndex(){
        $model = new Articles();

        return $this->render('index', ['model' => $model]);
    }

    public function actionArticle1(){

        $model = new Articles();


        return $this->render('article1', ['model' => $model]);
    }

    public function actionArticle2(){
        $model = new Articles();

        return $this->render('article2', ['model' => $model]);
    }

    public function actionArticle3(){
        $model = new Articles();


        return $this->render('article3', ['model' => $model]);
    }

    public function actionArticle4(){
        $model = new Articles();


        return $this->render('article4', ['model' => $model]);
    }

    public function actionArticle5(){
        $model = new Articles();


        return $this->render('article5', ['model' => $model]);
    }


    public function actionUpdates(){
        $model = new Articles();
        $model->updates($_POST['id'], $_POST['title'], $_POST['content']);


        return $this->render('index', ['model' => $model]);
    }
}