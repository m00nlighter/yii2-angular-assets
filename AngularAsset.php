<?php
namespace m00nlighter\angular;

use yii\web\AssetBundle;
use yii\web\View;

class AngularAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
    public function init()
    {
        $this->js[] = YII_DEBUG
            ? 'angular/angular.js'
            : 'angular/angular.min.js';
        parent::init();
    }
}
