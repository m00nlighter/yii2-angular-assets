<?php
namespace m00nlighter\angular;

use yii\web\AssetBundle;
use yii\web\View;

class AngularBootstrapAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
    public $depends = [
        'm00nlighter\angular\AngularAsset',
        'm00nlighter\angular\AngularAnimateAsset',
    ];
    public function init()
    {
        $this->js[] = YII_DEBUG
            ? 'angular-bootstrap/ui-bootstrap-tpls.js'
            : 'angular-bootstrap/ui-bootstrap-tpls.min.js';
        parent::init();
    }
}
