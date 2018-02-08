<?php
/**
 * Created by PhpStorm.
 * User: per4j
 * Date: 18/2/8
 * Time: 下午5:11
 */

namespace app\controllers;


use yii\log\FileTarget;
use yii\web\Controller;

class ErrorController extends Controller
{
    public function actionError() {
        // 记录错误信息到文件和数据库
        $error = \Yii::$app->errorHandler->exception;
        $err_msg = '';
        if ($error) {
            $file = $error->getFile();
            $line = $error->getLine();
            $code = $error->getCode();
            $message = $error->getMessage();

            $log_file = new FileTarget();
            $log_file->logFile = \Yii::$app->getRuntimePath() . '/logs/err.log';

            $err_msg = $message . "<br> [file:{$file}]<br>[line:{$line}]<br>[code:{$code}]
                <br>[url:{$_SERVER['REQUEST_URI']}]<br>[POST_DATA:".http_build_query($_POST)."] ";
            $log_file->messages[] =[
                $err_msg,
                1,
                "application",
                microtime(true)
            ];
            $log_file->export(); // 写入文件
            //TODO: 写入数据库
        }
        return "error<br/>错误信息：" . $err_msg;
    }

}