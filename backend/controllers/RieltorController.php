<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 05.05.18
 * Time: 11:57
 */

namespace backend\controllers;


use yii\web\Controller;
use app\models\Rieltor;

class RieltorController extends Controller
{
    public function actionIndex(){
        $model = new Rieltor();

        return $this->render('index', ['model' => $model]);
    }

    public function actionAdd(){
        $model = new Rieltor();

        //var_dump($_FILES);

        $path = 'upload/'; // директория для загрузки
        $ext = array_pop(explode('.',$_FILES['myImage']['name'])); // расширение
        $new_name = time().'.'.$ext; // новое имя с расширением
        $full_path = $path.$new_name; // полный путь с новым именем и расширением

        if($_FILES['myfile']['error'] == 0){
            if(move_uploaded_file($_FILES['myImage']['tmp_name'], $full_path)){
                $img = $full_path;
            }
        }

       // var_dump($img);

        $model->add($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['area'], $img);

        return $this->render('index', ['model' => $model]);
    }

    public function actionDeletes(){


        $model = new Rieltor();

        $model->deletes($_POST['id']);

        return $this->render('index', ['model' => $model]);
    }

    public function actionUpdate(){
        $model = new Rieltor();

        $model->updates($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['id']);

        return $this->render('index', ['model' => $model]);
    }
}