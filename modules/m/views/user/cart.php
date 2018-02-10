<?php
use \app\common\services\UrlService;
use \app\common\services\StaticService;
?>
<div class="order_pro_box">

	<ul class="order_pro_list">
		<li data-price="">
			<a href="<?=UrlService::buildUrl("/product/info");?>" class="pic" >
                <img src="#" style="height: 100px;width: 100px;"/>
            </a>
			<h2><a href="<?=UrlService::buildUrl("/product/info");?>"></a></h2>
			<div class="order_c_op">
				<b>¥</b>
				<span class="delC_icon" data=""></span>
				<div class="quantity-form">
					<a class="icon_lower" data-book_id="" ></a>
					<input type="text" name="quantity" class="input_quantity" value="" readonly="readonly" max="" />
					<a class="icon_plus" data-book_id=""></a>
				</div>
			</div>
		</li>
	</ul>
</div>
<div class="cart_fixed">
	<a href="<?=UrlService::buildUrl("/product/order",[ 'sc' => 'cart' ]);?>" class="billing_btn">结算</a>
	<b>合计：<strong>¥</strong><font id="price">0.00</font></b>
</div>