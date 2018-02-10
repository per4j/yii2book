### 九、商城微信H5界面搭建

> 商城微信H5界面位于`modules/m`下，注意区别
- 1.搭建账号绑定界面
    * 1.新建UserController
    * 2.新建Bind方法
    * 3.新建对应的视图层
    > 多说几句，这里也使用layouts进行布局，所以要在控制器的bind方法中添加一行代码：
    ```
    class UserController extends Controller
    {
        public function actionBind()
        {
            $this->layout = "main"; // 使用main layout布局
            return $this->render('bind');
        }
    }
    ```
    
    在main.php中实现当前页面的公共部分布局，`$this->render('bind')`将会放入`<?=$content;?>`中。
    