<?php
use \app\common\services\UrlService;
?>
<div class="search_header">
    <a href="<?=UrlService::buildNullUrl();?>" class="category_icon"></a>
    <input name="kw" type="text" class="search_input" placeholder="请输入您搜索的关键词" value="" />
    <i class="search_icon"></i>
</div>
<div class="sort_box">
    <ul class="sort_list clearfix">
        <li>
            <a href="<?=UrlService::buildNullUrl();?>" data="default">
                <span>默认</span>
            </a>
        </li>
        <li>
            <a href="<?=UrlService::buildNullUrl();?>" data="month_count">
                <span>月销量

                </span>
            </a>
        </li>
        <li>
            <a href="<?=UrlService::buildNullUrl();?>" data="view_count">
                <span>人气

                </span>
            </a>
        </li>
        <li>
            <a href="<?=UrlService::buildNullUrl();?>" data="price">
                <span>价格

                </span>
            </a>
        </li>
    </ul>
</div>
<div class="probox">

</div>