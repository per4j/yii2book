<?php
use \app\common\services\UrlService;
use \app\common\services\StaticService;
?>
<div class="page_title clearfix">
    <span>订单提交</span>
</div>
<div class="order_box">
    <div class="order_header">
        <h2>确认收货地址</h2>
    </div>

    <ul class="address_list">

            <li style="padding: 5px 5px;">
                <label>
                    <input style="display: inline;" type="radio" name="address_id" value="  >

                </label>

            </li>
    </ul>


	<div class="order_header">
		<h2>确认订单信息</h2>
	</div>

	<ul class="order_list">

		<li data="" data-quantity="">
			<a href="<?=UrlService::buildUrl("product/info");?>">
				<i class="pic">
					<img src="#" style="width: 100px;height: 100px;"/>
				</i>
				<h2> x </h2>
				<h4>&nbsp;</h4>
				<b>¥ </b>
			</a>
		</li>

	</ul>

	<div class="order_header" style="border-top: 1px dashed #ccc;">
		<h2>总计：</h2>
	</div>
</div>
<div class="op_box">
    <input type="hidden" name="sc" value="">
	<input style="width: 100%;" type="button" value="确定下单" class="red_btn do_order"  />
</div>
