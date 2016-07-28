<?php
namespace m00nlighter\angular;

use yii\web\AssetBundle;
use yii\web\View;

class AngularI18nAsset extends AssetBundle
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
        $this->js[] = 'angular-i18n/angular-locale_' . /Yii::$app->language.'.js';
        parent::init();
    }
}
