<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class FinanceController extends Controller
{
    public function actionIndex() {

        $this->layout = "main";
        return $this->render("index");
    }

    /**
     * 增加或编辑
     */
    public function actionAccount() {

        $this->layout = "main";
        return $this->render("account");
    }

    public function actionPay_info() {

        $this->layout = "main";
        return $this->render("pay_info");
    }
}
