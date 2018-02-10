<?php

namespace app\modules\m\controllers;

use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'main';
        return $this->render('index');
    }

    public function actionInfo() {
        $this->layout = 'main';
        return $this->render('info');
    }
}
