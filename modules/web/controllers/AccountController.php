<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class AccountController extends Controller
{
    public function actionIndex() {

        $this->layout = "main";
        return $this->render("index");
    }

    /**
     * 增加或编辑
     */
    public function actionSet() {

        $this->layout = "main";
        return $this->render("set");
    }

    public function actionInfo() {

        $this->layout = "main";
        return $this->render("info");
    }
}
