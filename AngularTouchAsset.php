<?php
namespace m00nlighter\angular;

use yii\web\AssetBundle;
use yii\web\View;

class AngularTouchAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
    public $depends = [
        'm00nlighter\angular\AngularAsset'
    ];
    public function init()
    {
        $this->js[] = YII_DEBUG
            ? 'angular-touch/angular-touch.js'
            : 'angular-touch/angular-touch.min.js';
        parent::init();
    }
}
