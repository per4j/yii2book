<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class StatController extends Controller
{
    public function actionIndex() {

        $this->layout = "main";
        return $this->render("index");
    }

    public function actionProduct() {

        $this->layout = "main";
        return $this->render("product");
    }

    public function actionMember() {

        $this->layout = "main";
        return $this->render("member");
    }

    public function actionShare() {

        $this->layout = "main";
        return $this->render("share");
    }
}
