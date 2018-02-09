<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class BrandController extends Controller
{
    public function actionInfo() {

        $this->layout = "main";
        return $this->render("info");
    }

    /**
     * 增加或编辑
     */
    public function actionSet() {

        $this->layout = "main";
        return $this->render("set");
    }

    public function actionImages() {

        $this->layout = "main";
        return $this->render("images");
    }
}
