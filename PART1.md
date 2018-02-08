### 一、虚拟主机配置
  sudo vim /etc/apache2/extra/httpd-vhosts.conf
  
  ```
104 <VirtualHost *:80>
105     DocumentRoot "/Users/***/***/basic/web"
106     ServerName www.yii2demo.com
107     <Directory "/Users/***/***/basic/web">
108 #      Options FollowSymLinks ExecCGI
109           AllowOverride All
110           Order allow,deny
111           Allow from all
112           Require all granted
113           RewriteEngine on
114           RewriteCond %{REQUEST_FILENAME} !-f
115           RewriteCond %{REQUEST_FILENAME} !-d
116           RewriteRule . index.php
117     </Directory>
115     ErrorLog "/private/var/log/apache2/dummy-host2.example.com-error_log"
116     CustomLog "/private/var/log/apache2/dummy-host2.example.com-access_log" common
118 </VirtualHost>
```
> 注意：这里的***指具体目录，basic是项目所在文件夹，要写到web子目录
### 二、映射ip
sudo vim /etc/hosts
```
127.0.0.1       www.yii2demo.com
```
### 三、Yii2基础配置
- cookieValidationKey设置
    * 修改config/web.php
        
        1> 可以通过`php -r "echo md5(time());"`生成32位字符串
        
        2> 'cookieValidationKey' => 'a7aefd7057b8267315a0cf095ed58125',

- urlManager设置
    * 修改config/web.php
    
        1> 'urlManager' => require(__DIR__.'/router.php'),
    * 新建router.php专门做路由规则文件
    
    ```
    <?php
        return [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'default/index' #这里指默认入口为default控制器，下的index方法
            ]
        ];

- 数据库配置
    * config/db.php，主要修改数据库名和密码
    
    ```
    return [
             'class' => 'yii\db\Connection',
             'dsn' => 'mysql:host=localhost;dbname=yii2basic',
             'username' => 'root',
             'password' => '',
             'charset' => 'utf8',
         
             // Schema cache options (for production environment)
             //'enableSchemaCache' => true,
             //'schemaCacheDuration' => 60,
             //'schemaCache' => 'cache',
         ];
    ```
    > 注意：这里主要修改`dbname`和`password`这两部分。
    
- 渲染默认首页
    我们在上面新增了`router.php`来配置默认首页路由，并创建了`DefaultController.php`控制器，现在修改`DefaultController.php`的`actionIndex`方法：
    ```
    <?php
    namespace app\controllers;
    
    class DefaultController extends Controller
    {
        public function actionIndex() {
            $this->layout = false; // false表示不使用默认布局
            return $this->render("index");
        }
    }
    ```
    
    在`views`中增加`index.php`文件。
    ```
    <h1>default/index</h1>
    ```
    至此，基础配置完成，下篇配置框架错误处理。