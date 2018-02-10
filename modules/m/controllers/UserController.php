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
}
