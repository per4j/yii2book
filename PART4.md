### 七、使用bootstrap搭建管理员后端界面

- 1.添加静态资源
    
    用到的静态资源有`bootstrap`, `font-awesome`。

- 2.修改modules/web/views/default/index.php文件。

- 3.取消layout/main.php渲染视图
    > $this->layout = false;
    
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