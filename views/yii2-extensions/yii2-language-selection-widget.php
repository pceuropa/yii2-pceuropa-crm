<?php
use yii\helpers\Html;
use yii\helpers\Url;
use pceuropa\languageSelection\LanguageSelection;

$this->title = Yii::t('app', 'Yii2 Language Selection Widget');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'yii2 extensions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="row">
	<div class="col-md-8">
<h1>Boostrap Dropmenu select languages</h1>
This widget helps set only url. To management languages, I recommend <?= Html::a ( 'codemix/yii2-localeurls', 'https://github.com/codemix/yii2-localeurls', ['target' => 'new']  ); ?>
<h2>Installation</h2>

<pre><code>composer require pceuropa/yii2-language-selection-widget</code></pre>

<h2>Configuration</h2>


<div class="row">
<div class="col-md-12">
<pre><code>
use pceuropa\languageSelection\LanguageSelection;

LanguageSelection::widget([
	'language' => ['pl', 'en', 'fr', 'nl', 'de'],
	'languageParam' => 'language',
	'container' => 'div', // li for navbar, div for sidebar or footer example
	'classContainer' =>  'dropdown-toggle' // btn btn-default dropdown-toggle
])</code></pre>
<?= LanguageSelection::widget([
	'language' => ['pl', 'en', 'fr', 'nl', 'de'],
	'languageParam' => 'language',
	'container' => 'div', // li for navbar, div for sidebar or footer example
	'classContainer' =>  'dropdown-toggle' // btn btn-default dropdown-toggle
]) ?>
</div>

<div class="col-md-12">
<pre><code>
use pceuropa\languageSelection\LanguageSelection;

LanguageSelection::widget([
	'language' => ['pl', 'en', 'en-us', 'nl', 'de'],
	'languageParam' => 'language',
	'container' => 'div', // li for navbar, div for sidebar or footer example
	'classContainer' =>  'btn btn-default dropdown-toggle' // btn btn-default dropdown-toggle
]) </code></pre>
	<?= LanguageSelection::widget([
	'language' => ['pl', 'en', 'en-us', 'nl', 'de', ],
	'languageParam' => 'language',
	'container' => 'div', // li for navbar, div for sidebar or footer example
	'classContainer' =>  'btn btn-default dropdown-toggle' // btn btn-default dropdown-toggle
]) ?>

	</div>
</div>


