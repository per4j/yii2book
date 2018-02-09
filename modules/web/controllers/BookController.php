<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class BookController extends Controller
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

    public function actionImages() {
        $this->layout = "main";
        return $this->render("images");
    }

    public function actionCat() {
        $this->layout = "main";
        return $this->render("cat");
    }

    public function actionCat_set() {
        $this->layout = "main";
        return $this->render("cat_set");
    }
}
