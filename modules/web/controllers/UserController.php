<?php
/**
 * Created by PhpStorm.
 * User: per4j
 * Date: 18/2/8
 * Time: 下午7:29
 */

namespace app\modules\web\controllers;


use yii\web\Controller;

class UserController extends Controller
{

    public function actionLogin() {
        $this->layout = false;
        return $this->render("login");
    }

    public function actionEdit() {
        return $this->render("edit");
    }

    public function actionResetPwd() {
        return $this->render("reset_pwd");
    }
}