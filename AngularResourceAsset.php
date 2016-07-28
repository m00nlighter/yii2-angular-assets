<?php
namespace m00nlighter\angular;

use yii\web\AssetBundle;
use yii\web\View;

class AngularResourceAsset extends AssetBundle
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
            ? 'angular-resource/angular-resource.js'
            : 'angular-resource/angular-resource.min.js';
        parent::init();
    }
}
