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
- 2.搭建品牌首页界面
    * 1.新建DefaultController
    * 2.新建Index方法
    * 3.新建对应的视图层
- 3.搭建商品列表界面
    * 1.新建ProductController
    * 2.新建Index, Info方法
    * 3.新建对应的视图层
- 4.搭建购物车界面
    * 1.修改UserController
    * 2.新建Cart方法
    * 3.新建对应的视图层
- 5.搭建订单管理界面
    * 1.在ProductController中增加Order方法
    * 2.在UserController中增加Order方法
    * 3.新建对应的视图层
- 6.搭建微信支付界面
    * 1.新建PayController
    * 2.新建Buy方法
    * 3.新建对应的视图层