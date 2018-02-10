<?php

namespace app\modules\m\controllers;

use yii\web\Controller;

class UserController extends Controller
{
    public function actionBind()
    {
        $this->layout = "main";
        return $this->render('bind');
    }

    public function actionCart() {
        $this->layout = "main";
        return $this->render('cart');
    }

    public function actionOrder() {

        $this->layout = 'main';
        return $this->render('order');
    }
}
