<?php 
namespace app\widgets\LanguageSelection;


class LanguageAsset extends \yii\web\AssetBundle{
    public $sourcePath = '@app/widgets/LanguageSelection/assets';
    public $baseUrl = '@web';
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
