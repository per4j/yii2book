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
        $this->layout = 'user';
        return $this->render("login");
    }

    public function actionEdit() {
        $this->layout = 'user';
        return $this->render("edit");
    }

    public function actionResetPwd() {
        $this->layout = 'user';
        return $this->render("reset_pwd");
    }
}