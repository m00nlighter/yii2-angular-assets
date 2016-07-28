<?php
namespace m00nlighter\angular;

use yii\web\AssetBundle;
use yii\web\View;

class AngularAnimateAsset extends AssetBundle
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
            ? 'angular-animate/angular-animate.js'
            : 'angular-animate/angular-animate.min.js';
        parent::init();
    }
}
