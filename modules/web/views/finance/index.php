<?php echo \Yii::$app->view->renderFile("@app/modules/web/views/common/tab_finance.php", ['current' => 'index']); ?>

<div class="row">
	<div class="col-lg-12">
		<form class="form-inline wrap_search">
			<div class="row  m-t p-w-m">
				<div class="form-group">
					<select name="status" class="form-control inline">
						<option value="#">请选择状态</option>

					</select>
				</div>
			</div>
		</form>
		<hr/>
		<table class="table table-bordered m-t">
			<thead>
			<tr>
				<th>订单编号</th>
				<th>名称</th>
				<th>价格</th>
				<th>支付时间</th>
				<th>状态</th>
				<th>创建时间</th>
				<th>操作</th>
			</tr>
			</thead>
			<tbody>

			</tbody>
		</table>

	</div>
</div>
