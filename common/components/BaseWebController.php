<?php
/**
 * Created by PhpStorm.
 * User: per4j
 * Date: 18/2/25
 * Time: 下午4:10
 */

namespace app\common\components;


use yii\web\Controller;
use yii\web\Cookie;

class BaseWebController extends Controller
{

    public $enableCsrfValidation = false;

    public function get($key, $default_val = "") {
        return \Yii::$app->request->get($key, $default_val);
    }

    public function post($key, $default_val = "") {
        return \Yii::$app->request->post($key, $default_val);
    }

    public function setCookie($name, $value, $expire=0) {
        $cookies = \Yii::$app->response->cookies;
        $cookies->add(new Cookie([
            'name' => $name,
            'value' => $value,
            'expire' => $expire
        ]));
    }

    public function getCooike($name, $default_val = '') {
        $cookies = \Yii::$app->request->cookies;
        return $cookies->getValue($name, $default_val);
    }

    public function removeCookie($name) {
        $cookies = \Yii::$app->response->cookies;
        $cookies->remove($name);
    }

    public function renderJson($data=[], $msg = "ok", $code = 200) {
        header("Content-type:application/json");
        return json_encode([
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
            'req_id' => uniqid()
        ]);
    }
}