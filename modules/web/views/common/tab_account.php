<?php
/**
 * Created by PhpStorm.
 * User: per4j
 * Date: 18/2/9
 * Time: 下午12:40
 */
use app\common\services\UrlService;

$tab_list = [
    'index' => [
        'title' => '账户列表',
        'url' => '/account/index'
    ]
];
?>
<div class="row  border-bottom">
    <div class="col-lg-12">
        <div class="tab_title">
            <ul class="nav nav-pills">
                <?php foreach ($tab_list as $_current => $item ) :?>
                    <li <?php if ($current == $_current): ?> class="current" <?php endif; ?> >
                        <a href="<?=UrlService::buildUrl( $item['url'] );?>"><?=$item['title']?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
