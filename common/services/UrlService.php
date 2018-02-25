<?php
/**
 * Created by PhpStorm.
 * User: per4j
 * Date: 18/2/8
 * Time: 下午7:48
 */

namespace app\common\services;

use yii\helpers\Url;

class UrlService
{
    static public function buildUrl($uri, $params = []) {
        return Url::toRoute( array_merge([$uri], $params) );
    }

    static public function buildWebUrl($url, $params = []) {
        $path = Url::toRoute( array_merge([$url], $params));
        return '/web'.$path;
    }

    static public function buildNullUrl() {
        return "javascript:void(0)";
    }

}