<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('app', 'Boostrap Menu builder online dropdown Ajax Yii2');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Yii2 extensions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Menu builder');
Yii::$app->view->registerMetaTag([
		'name' => 'description',
		'content' => Yii::t('app', 'Menu generator, drag ang drop items to move, update, delete. Links and dropmenu.')
	]); 

?>
<div class="row">
	<div class="col-md-8">
<h1><?= Yii::t('app', 'Boostrap Menu builder for Yii2 Framework')  ?></h1>

<h2><?= Yii::t('app', 'Features') ?></h2>
<ul>
  <li><?= Yii::t('app', 'To the menu, can add links, dropmenu and lines') ?></li>
  <li><?= Yii::t('app', '<b>Drag end drop</b> - edit, move, delete items') ?></li>
  <li><?= Yii::t('app', '<b>Ajax</b> - creating menu without refresh page') ?></li>
  <li><?= Yii::t('app', 'Many menus (eg. different languages), <b>stored in the database</b>') ?></li>
  <li><?= Yii::t('app', 'Embedding in the application using the method with the integer parameter') ?></li>
  <li><?= Html::a ( Yii::t('app', 'Demo bootstrap menu builder'), ['menu/creator'] , ['target' => 'new']); ?></li>
</ul>


<h2><?= Yii::t('app', 'Installation menu builder')  ?></h2>

<pre class="bash"><code>composer require pceuropa/yii2-menu dev-master</code></pre>

<?= Yii::t('app', 'Integration module with Yii2: add the following code to config file')  ?>  /common/config/main.php or /app/config/web.php
<pre><code class="language-php">'modules' => [
    'menu' => [
            'class' => '\pceuropa\menu\Menu',
        ],
    ]</code></pre>


<h2><?= Yii::t('app', 'Create database table schema')  ?></h2>
<pre class="bash"><code>php yii migrate/up --migrationPath=@vendor/pceuropa/yii2-menu/migrations</code></pre>

<?= Yii::t('app', 'You can create a menu...')  ?>
 
  
<h2><?= Yii::t('app', 'Creating a menu')  ?></h2>
<?= Yii::t('app', 'If the installation module was successful, menu builder should be available at')  ?> example.com<?= Html::a ( '/menu/creator ', ['menu/creator']); ?>

<br />
<?= Yii::t('app', 'After saving a menu in database, remember ID number')  ?>
<h2><?= Yii::t('app', 'Integration menu with the application frontend (or backend)')  ?></h2>

app/views/layout/main.php
<pre><code class="language-css">use pceuropa\menu\Menu;
// Menu::NavbarLeft($id) return array

NavBar::begin(['brandLabel' => 'Brand', 'brandUrl' => Url::home()]);
echo Nav::widget([ 
		'items' => Menu::NavbarLeft(1),  // param is id of menu
		'options' => ['class' => 'navbar-nav navbar-left']
	]); 

echo Nav::widget([ 
                    'items' => Menu::NavbarRight(1),
                    'options' => ['class' => 'navbar-nav navbar-right'],
                ]);
NavBar::end();</code></pre>


<?= $this->render('_comments'); ?>

</div>
	<div class="col-md-4">
		<?=  $this->render('_badge', [ 'app' => 'yii2-menu', ]); ?>
		<?=  $this->render('_form-ads'); ?>
		<?=  $this->render('_donate'); ?>
	</div>
</div>


<?php

    $this->registerJsFile('/js/prism.js', ['position' => 3, 'depends' => 'yii\web\YiiAsset']);
    $this->registerCssFile('@web/css/prism.css');

?>
