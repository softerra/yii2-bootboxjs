<?php
/**
 * Created by PhpStorm.
 * User: Huijiewei
 * Date: 2014/11/11
 * Time: 16:23
 */

namespace huijiewei\bootboxjs;

use Yii;
use yii\web\AssetBundle;

class BootboxjsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/life2016/yii2-bootboxjs/assets';

    public $js = [
        'js/bootbox.min.js',
    ];
    
    /**
     * Registers this asset bundle with a view.
     * @param \yii\web\View $view the view to be registered with
     * @return static the registered asset bundle instance
     */
    public static function registerWithOverride($view)
    {
        $assetbundle = self::register($view);
		
        Yii::$app->view->registerJs('
            yii.confirm = function(message, ok, cancel) {
                bootbox.confirm(message, function(result) {
                    if (result) { !ok || ok(); } else { !cancel || cancel(); }
                });
            }
        ');
		
        if(Yii::$app->language !== null && strlen(Yii::$app->language)>=2) {
            Yii::$app->view->registerJs('bootbox.setDefaults({locale: "'.substr(Yii::$app->language,0,2).'"});');
        }
        
        return $assetbundle;
    }
}
