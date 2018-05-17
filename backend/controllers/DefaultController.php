<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 17.05.18
 * Time: 12:16
 */

namespace vova07\imperavi\tests\functional\data\controllers;
use vova07\imperavi\actions\DeleteFileAction;
use vova07\imperavi\actions\GetFilesAction;
use vova07\imperavi\actions\GetImagesAction;
use vova07\imperavi\actions\UploadFileAction;
use vova07\imperavi\tests\functional\TestCase;
use yii\web\Controller;

class DefaultController
{
    public function actions()
    {
        return [
            'images-get' => [
                'class' => 'vova07\imperavi\actions\GetImagesAction',
                'url' => 'http://crystalittest.com.ua/upload/', // Directory URL address, where files are stored.
                'path' => 'var/www/crystalittest.com.ua/backend/web/upload', // Or absolute path to directory where files are stored.
            ],
            'image-upload' => [
                'class' => 'vova07\imperavi\actions\UploadFileAction',
                'url' => 'http://crystalittest.com.ua/upload/', // Directory URL address, where files are stored.
                'path' => 'var/www/crystalittest.com.ua/backend/web/upload', // Or absolute path to directory where files are stored.
            ],
        ];
    }
}