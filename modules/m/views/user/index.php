<?php
use \app\common\services\UrlService;
?>
<div class="mem_info">
	<span class="m_pic"><img src="#" /></span>
	<p>nickname</p>
</div>
<div class="fastway_list_box">
	<ul class="fastway_list">
		<li><a href="<?=UrlService::buildUrl("product/cart");?>"><b class="wl_icon"></b><i class="right_icon"></i><span>购物车</span></a></li>
		<li><a href="<?=UrlService::buildUrl("user/order");?>"><b class="morder_icon"></b><i class="right_icon"></i><span>我的订单</span></a></li>
		<li><a href="<?=UrlService::buildUrl("user/fav");?>"><b class="fav_icon"></b><i class="right_icon"></i><span>我的收藏</span></a></li>
		<li><a href="<?=UrlService::buildUrl("user/comment");?>"><b class="sales_icon"></b><i class="right_icon"></i><span>我的评论</span></a></li>
		<li><a href="<?=UrlService::buildUrl("user/address");?>"><b class="locate_icon"></b><i class="right_icon"></i><span>收货地址</span></a></li>
	</ul>
</div>
<div class="footer_fixed clearfix">
    <span><a href="<?=UrlService::buildUrl("default/index");?>"><i class="home_icon"></i><b>首页</b></a></span>
    <span><a href="<?=UrlService::buildUrl("product/index");?>"><i class="store_icon"></i><b>图书</b></a></span>
    <span><a href="<?=UrlService::buildUrl("user/index");?>" class="aon"><i class="member_icon"></i><b>我的</b></a></span>
</div>