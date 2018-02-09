<?php
/**
 * Created by PhpStorm.
 * User: per4j
 * Date: 18/2/7
 * Time: 下午8:59
 */
use \app\common\services\UrlService;
$tab_list = [
    'edit' => [
        'title' => '编辑信息',
        'url' => '/web/user/edit'
    ],
    'pwd' => [
        'title' => '修改密码',
        'url' => '/web/user/reset-pwd'
    ]
];
?>
<div class="row border-bottom">
    <div class="col-lg-12">
        <div class="tab_title">
            <ul class="nav nav-pills">
                <?php foreach( $tab_list as $_current => $item ): ?>
                    <li <?php if ($current == $_current): ?> class="current" <?php endif; ?> >
                        <a href="<?=UrlService::buildUrl($item['url']); ?>"><?=$item['title'];?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
