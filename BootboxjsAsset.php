<?php
/**
 * Created by PhpStorm.
 * User: Huijiewei
 * Date: 2014/11/11
 * Time: 16:23
 */

namespace huijiewei\bootboxjs;

use yii\web\AssetBundle;

class BootboxjsAsset extends AssetBundle
{
    public $sourcePath = '@huijiewei/bootboxjs/assets';

    public $js = [
        'js/bootbox.js',
    ];
}
