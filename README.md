# Yii2 angular assets
Angular AssetsBundle for Yii2 php framework

includes:
- angular
- angular-touch
- angular-mocks
- angular-messages
- angular-message-format
- angular-loader
- angular-i18n
- angular-cookies
- angular-aria"
- angular-animate
- angular-route
- angular-sanitize
- angular-scenario
- angular-resource

### Version
0.0.1
### Installation
```sh
composer require m00nlighter/yii2-angular-assets dev-master
```
or add
```
"m00nlighter/yii2-angular-assets": "dev-master",
```
###Usage

In view
```
m00nlighter\angular\AngularAsset::register($this);
m00nlighter\angular\AngularAnimateAsset::register($this);
m00nlighter\angular\AngularHereIsNameOfModuleInCamelCaseAsset::register($this);
```
