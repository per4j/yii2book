### 八、yii中的布局(layouts)

- 1.AssetBundle
    
    通过`AssetBundle`来统一js、css资源，及其版本信息。

- 2.layouts

    布局(layouts)，类似模板方法，一般的网站会分类top, content, bottom，通常情况下，top，bottom是相同的，这样，我们就可以将公共的布局放到layouts中，content对应控制器的每个方法。
    ```
        <?php
        \app\assets\WebAsset::register($this);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>管理后台</title>
            <?php $this->head() ?>
        
        </head>
        
        <body class="gray-bg">
        <?php $this->beginBody() ?>
        <?=$content;?>
        <?php $this->endBody() ?>
        </body>
        </html>
        <?php $this->endPage() ?>
    ```
    > 分别来说一下，`WebAsset`：统一静态资源
    <br>`$this->head()`:头部信息
    <br>`$this->beginBody()`:内容区，会将`<?=$content;?>`替换为控制器的render()方法指向的布局

- 3.使用layouts
    
    我们需要将actionXXX()方法中的`$this->layout = false;`修改为`$this->layout = 'user'';`
    
- 4.在入口文件增加版本号
入口文就是web/index.php，我们在里面添加：
```
// 加入版本号 RELEASE_VERSION
if ( file_exists("/Users/release_version/version_book") ) {
    define("RELEASE_VERSION", trim( file_get_contents("/Users/release_version/version_book") ));
} else {
    define("RELEASE_VERSION", time());
}
```
> 建议将这个文件保存到服务器上的相关目录下，在每次有新版本发布时进行修改

- 5.使用renderFile()抽取公共代码
    我们的编辑和重置密码页面是通过标签方式切换的，如果将这部分分别写在`edit`, `reset_pwd`显示代码冗余，yii为我们提供了Yii::$app->view->renderFile()函数。
    
    * 使用方式：
    在view中需要的位置添加以下代码，即可：
    ```
    <?php echo \Yii::$app->view->renderFile("@app/modules/web/views/common/tab_user.php",['current' => 'pwd']);?>
    ```
    两个参数，注意第一个参数，要以@开头，第二个参数是指定参数的，如：编辑页面current值为edit，重置密码为pwd。

- 6.搭建账号相关页面
- 7.搭建品牌相关页面
    * 1.新建BrandController
    * 2.新建Info, Set, Images方法
    * 3.新建对应的视图层
- 8.搭建图书管理界面
    * 1.新建BookController
    * 2.新建Index, Set, Info, Images方法
    * 3.新建对应的视图层
- 9.搭建图书分类界面
    * 1.进入BookController
    * 2.新建cat, cat_set方法
    * 3.新建对应的视图层