<?php
use \app\common\services\UrlService;
?>

<?php echo Yii::$app->view->renderFile("@app/modules/web/views/common/tab_qrcode.php",[ 'current' => 'index' ]);?>

<div class="row">
	<div class="col-lg-12">
        <div class="row m-t">
            <div class="col-lg-12">
                <a class="btn btn-w-m btn-outline btn-primary pull-right" href="<?=UrlService::buildUrl("qrcode/set");?>">
                    <i class="fa fa-plus"></i>二维码
                </a>
            </div>
        </div>
        <table class="table table-bordered m-t">
            <thead>
            <tr>
                <th>渠道名称</th>
                <th>二维码</th>
                <th>扫码总数</th>
                <th>注册总数</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

	</div>
</div>

