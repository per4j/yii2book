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

    public function actionIndex()
    {
        $this->layout = 'main';
        return $this->render('index');
    }

    public function actionAddress()
    {
        $this->layout = 'main';
        return $this->render('address');
    }

    public function actionAddress_set()
    {
        $this->layout = 'main';
        return $this->render('address_set');
    }

    public function actionFav()
    {
        $this->layout = 'main';
        return $this->render('fav');
    }

    public function actionComment()
    {
        $this->layout = 'main';
        return $this->render('comment');
    }

    public function actionComment_set()
    {
        $this->layout = 'main';
        return $this->render('comment_set');
    }
}
