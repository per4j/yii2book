<?php echo Yii::$app->view->renderFile("@app/modules/web/views/common/tab_stat.php",[ 'current' => 'share' ]);?>
<div class="row m-t">
	<div class="col-lg-12" id="container" style="height: 400px;">

	</div>
	<div class="col-lg-12 m-t">
		<form class="form-inline" id="search_form_wrap">
			<div class="row p-w-m">
				<div class="form-group">
					<div class="input-group">
						<input type="text" placeholder="请选择开始时间" name="date_from" class="form-control"  value="">
					</div>
				</div>
				<div class="form-group m-r m-l">
					<label>至</label>
				</div>
				<div class="form-group">
					<div class="input-group">
						<input type="text" placeholder="请选择结束时间" name="date_to" class="form-control" value="">
					</div>
				</div>
				<div class="form-group">
					<a class="btn btn-w-m btn-outline btn-primary search">搜索</a>
				</div>
			</div>
			<hr/>
		</form>
		<table class="table table-bordered m-t">
			<thead>
			<tr>
				<th>日期</th>
				<th>分享次数</th>
			</tr>
			</thead>
			<tbody>

			</tbody>
		</table>
		
	</div>
</div>
