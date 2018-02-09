<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class QrcodeController extends Controller
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
}
