<?php
use \app\common\services\UrlService;
use \app\common\services\UtilService;
use \app\common\services\StaticService;
use \app\common\services\ConstantMapService;
?>

<?php echo \Yii::$app->view->renderFile("@app/modules/web/views/common/tab_member.php", ['current' => 'comment']); ?>

<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered m-t">
            <thead>
            <tr>
                <th>头像</th>
                <th>姓名</th>
                <th>手机</th>
                <th>书籍名称</th>
                <th>评论内容</th>
                <th>打分</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

    </div>
</div>
