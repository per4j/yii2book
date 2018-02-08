### 四、框架错误处理与记录
- errorHandler指定处理控制器和方法
    
    * config/web.php，找到
        ```
        'errorHandler' => [
           'errorAction' => 'site/error',
        ],
        ```
        `site/error`指使用site控制器的`error`方法处理错误，现在修改为：
        ```
        'errorHandler' => [
           'errorAction' => 'error/error',
        ],
        ```
        
        即`ErrorController.php`控制器的`error`方法，新建error控制器：
        ```
        <?php

        namespace app\controllers;
        // 省略use...
        
        class ErrorController extends Controller
        {
            public function actionError() {
                return "error";
            }
        }

        ```
        
- 记录到文件和数据库

    修改`ErrorController.php`的`actionError`方法:
    ```
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
            $log_file->logFile = Yii::$app->getRuntimePath() . '/logs/err.log';

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
    ```