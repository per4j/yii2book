<?php
/**
 * Created by PhpStorm.
 * User: per4j
 * Date: 18/2/8
 * Time: 下午4:42
 */

namespace app\controllers;


use yii\web\Controller;

class DefaultController extends Controller
{

    public function actionIndex() {
        return "index";
    }
}