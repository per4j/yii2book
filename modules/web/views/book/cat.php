<?php
use \app\common\services\ConstantMapService;
use \app\common\services\UrlService;
use \app\common\services\StaticService;
?>

<?php echo \Yii::$app->view->renderFile("@app/modules/web/views/common/tab_book.php", ['current' => 'cat']); ?>

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
			<hr/>
			<div class="row">
				<div class="col-lg-12">
					<a class="btn btn-w-m btn-outline btn-primary pull-right" href="<?=UrlService::buildUrl("book/cat_set");?>">
						<i class="fa fa-plus"></i>分类
					</a>
				</div>
			</div>

		</form>
		<table class="table table-bordered m-t">
			<thead>
			<tr>
				<th>序号</th>
				<th>分类名称</th>
				<th>状态</th>
				<th>权重</th>
				<th>操作</th>
			</tr>
			</thead>
			<tbody>

			</tbody>
		</table>
	</div>
</div>
