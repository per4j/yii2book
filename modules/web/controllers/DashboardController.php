<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class DashboardController extends Controller
{
    public function actionIndex() {

        $this->layout = "main";
        return $this->render("index");
    }
}
