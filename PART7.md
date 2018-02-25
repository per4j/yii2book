### 十、业务代码优化


- 1.统一布局
    将公共代码提取到layout/xxx.php中，并在xxx.php中使用`<?=content;?>`变量，然后在控制器中通过`$this->layout='xxx'`来使用该布局。
    
    有时候`$this->layout='xxx'`使用太多，可能在构造方法中统一配置
    ```
        public function __construct($id, $module, array $config = [])
        {
            parent::__construct($id, $module, $config);
            $this->layout = 'main';
        }
     ```
     
- 2.前端资源管理 和 版本号的使用
- 3.统一基础控制器
- 4.链接管理服务
