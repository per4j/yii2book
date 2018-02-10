<?php
use \app\common\services\UrlService;
use \app\common\services\StaticService;

?>
<div class="page_title clearfix">
    <span>订单列表</span>
</div>
<div class="order_box mg-t20">
	<div class="order_header">
		<h2>订单编号: </h2>
		<p>下单时间： 状态：</p>

		<p>快递状态：</p>

            <p>快递信息：</p>

		<span class="up_icon"></span>
	</div>
	<ul class="order_list">
		<li>
			<a href="<?=UrlService::buildNullUrl( );?>">
				<i class="pic">
                    <img src="#"  style="width: 100px;height: 100px;"/>
                </i>
				<h2> </h2>
				<h3>&nbsp;</h3>
				<h4>&nbsp;</h4>
				<b>¥ </b>
			</a>

            <a style="display: block;position: absolute;bottom: 1rem;right: 1rem;" class="button"   href="<?=UrlService::buildUrl("user/comment_set");?>">我要评论</a>

		</li>
	</ul>
</div>

