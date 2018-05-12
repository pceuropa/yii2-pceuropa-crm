<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use pceuropa\languageSelection\LanguageSelection;
use yii\helpers\StringHelper;
use lajax\translatemanager\models\Language;


$languages = [
  'pl' => 'pl',
  'en' => 'en',
];
  
  

NavBar::begin([
                  'brandLabel' => Html::img('@img/logo/logo_small.png'),
                  'brandUrl' => Url::to(['/site/index']),
                  'options' => [
                      'class' => 'navbar-inverse navbar-fixed-top',
                  ],
              ]);
$blog = (yii::$app->language == 'pl') ? '/blog/pl/' : '/blog/';

$m = [
        '<li>'.Html::a ('<span class="glyphicon glyphicon-home" aria-hidden="true"></span>', ['/site/index'] ).'</li>',
        ['label' => Yii::t('app', 'Services'), 'items' => [
                ['label' => Yii::t('app', 'Online Surveys'), 'url' => ['/forms/module/user']],
                ['label' => Yii::t('app', 'Form Code Generator'), 'url' => ['/user/setting']],
                ['label' => Yii::t('app', 'Test URL - Website availability'), 'url' => ['/site/url']],
                ['label' => Yii::t('app', 'Test SEO'), 'url' => ['/site/seo']],
        ]],
        ['label' => 'Blog', 'url' => $blog],
        ['label' => Yii::t('app', 'Contact'), 'url' => ['/site/contact']],
     ];

if (Yii::$app->user->isGuest) {
    $m[] = ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']];
    $m[] = ['label' => Yii::t('app', 'Signup'), 'url' => ['/site/signup']];
} else {
    $m[] = ['label' => Yii::t('app', 'Your Profil'), 'items' => [
                ['label' => Yii::t('app', 'Your Forms'), 'url' => ['/forms/module/user']],
                ['label' => Yii::t('app', 'Email and password'), 'url' => ['/user/setting']],
                '<li>' . Html::beginForm(['/site/logout'], 'post') .
                Html::submitButton( 'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout']) . Html::endForm() . '</li>',
            ]];

}

if (\Yii::$app->user->can('admin' )) {
    $m[] = ['label' => Yii::t('app', 'Tr'), 'items' => [
      ['label' => Yii::t('app', 'Languages'), 'url' => ['/translatemanager/language/list', 'LanguageSearch[status]' => 1]],
                ['label' => Yii::t('app', 'create'), 'url' => ['/translatemanager/language/create']],
                ['label' => Yii::t('app', 'scan'), 'url' => ['/translatemanager/language/scan']],
                ['label' => Yii::t('app', 'optimzer'), 'url' => ['/translatemanager/language/optimzer']],
 ['label' => Yii::t('language', 'Import'), 'url' => ['/translatemanager/language/import']],
        ['label' => Yii::t('language', 'Export'), 'url' => ['/translatemanager/language/export']],
            ]];
}

$m[] = LanguageSelection::widget([
              'language' => $languages,
              'languageParam' => 'lang'
          ]);

echo Nav::widget([ 'options' => ['class' => 'navbar-nav navbar-right'], 'items' => $m ]);

NavBar::end();

?>



