<?php
use \app\common\services\UrlService;
?>
<div class="pro_tab clearfix">
    <span>图书详情</span>
</div>
<div class="proban">
    <div id="slideBox" class="slideBox">
        <div class="bd">
            <ul>
                <li><img src="#"/></li>
            </ul>
        </div>
    </div>
</div>
<div class="pro_header">
    <div class="pro_tips">
        <h2>name</h2>
        <h3><b>¥</b><font>库存量：</font></h3>
    </div>
    <span class="share_span"><i class="share_icon"></i><b>分享商品</b></span>
</div>
<div class="pro_express">月销量：<b>累计评价：</b></div>
<div class="pro_virtue">
    <div class="pro_vlist">
        <b>数量</b>
        <div class="quantity-form">
            <a class="icon_lower"></a>
            <input type="text" name="quantity" class="input_quantity" value="1" readonly="readonly" max=""/>
            <a class="icon_plus"></a>
        </div>
    </div>
</div>
<div class="pro_warp">

</div>
<div class="pro_fixed clearfix">
    <a href="<?= UrlService::buildUrl("index"); ?>"><i class="sto_icon"></i><span>首页</span></a>

    <input type="button" value="立即订购" class="order_now_btn" data=""/>
    <input type="button" value="加入购物车" class="add_cart_btn" data=""/>
    <input type="hidden" name="id" value="">
</div>
