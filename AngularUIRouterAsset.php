<?php
namespace m00nlighter\angular;

use yii\web\AssetBundle;
use yii\web\View;

class AngularAriaAsset extends AssetBundle
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
            ? 'angular-ui-router/release/angular-ui-router.js',
            : 'angular-ui-router/release/angular-ui-router.min.js';
        parent::init();
    }
}
