<?php
namespace m00nlighter\angular;

use yii\web\AssetBundle;
use yii\web\View;

class AngularMocksAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $js = [
        'angular-mocks/angular-mocks.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
    public $depends = [
        'm00nlighter\angular\AngularAsset'
    ];
    
}
