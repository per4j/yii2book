<?php echo \Yii::$app->view->renderFile("@app/modules/web/views/common/tab_finance.php", ['current' => 'account']); ?>

<div class="row">
    <div class="col-lg-12 m-t">
        <p>总收款金额：元</p>
    </div>
	<div class="col-lg-12">
		<table class="table table-bordered m-t">
			<thead>
			<tr>
				<th>订单编号</th>
				<th>价格</th>
				<th>支付时间</th>
			</tr>
			</thead>
			<tbody>

			</tbody>
		</table>


	</div>
</div>
