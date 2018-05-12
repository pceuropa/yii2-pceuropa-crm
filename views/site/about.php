<?php


use yii\helpers\Html;
use pceuropa\languageSelection\LanguageSelection;
$this->title = Yii::t('app', 'Full Stack Developer Python PHP JavaScript SQL');
Yii::$app->view->registerMetaTag([
		'name' => 'description',
		'content' => Yii::t('app', 'Full Stack Idiot')
	]); 
	
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
	<div class="col-md-4">
		<?= Html::img('/images/programmer.jpg', ['class' => 'clearfix img-responsive img-thumbnail', 'alt' => 'programer python yii2']); ?>
	</div>
	
	<div class="col-md-8">
		<?= Yii::t('app', 'Hi,') ?>
    	<h3><?= Yii::t('app', 'Progress of life') ?> :</h3>
    	<div class="progress">
		  <div class="progress-bar" style="width: 34%;"></div>
		</div>
    	<h3><?= Yii::t('app', 'Knowleadge') ?> :</h3>
    	
    	<span class="label label-default">HTML5</span>
    	<span class="label label-default">PHP</span>
    	<span class="label label-default">Python</span>
    	
    	<br />
    	<span class="label label-success">JavaScript</span>
		<span class="label label-success">jQuery, Vue</span>
		<span class="label label-success">Google Charts API</span>
		<span class="label label-success">Google Maps API</span>
		<br />
		
		<span class="label label-primary">CSS</span>
		<span class="label label-primary">Twitter Bootstrap</span>
		<br />
		<span class="label label-danger">SQL</span><span class="label label-danger">MariaDB</span>
		<span class="label label-danger">noSQL</span><span class="label label-danger">MongoDB</span>
		<br />
		
		<span class="label label-info">Linux</span>
		<span class="label label-info">Nginx</span>
		<span class="label label-info">Git</span>
		<span class="label label-info">Composer</span>
		
		
		<br />
		<span class="label label-warning">User experience (UX)</span>
		<span class="label label-warning">SEO</span>
		<span class="label label-warning">Agile</span>
		
	
	<h3><?= Yii::t('app', 'I like') ?>:</h3>
	 
	<span class="label label-success"><?= Yii::t('app', 'Veganism') ?></span>
	<span class="label label-success"><?= Yii::t('app', 'Ethics') ?></span>
	<span class="label label-warning"><?= Yii::t('app', 'Psychology') ?></span>
	<span class="label label-warning"><?= Yii::t('app', 'Philosophy') ?></span>
	<span class="label label-primary"><?= Yii::t('app', 'Maths') ?></span>
	<span class="label label-primary"><?= Yii::t('app', 'Astronomie') ?></span>
	<span class="label label-primary"><?= Yii::t('app', 'Physics') ?></span>
	<span class="label label-info"><?= Yii::t('app', 'Drones & robots') ?></span>
	<span class="label label-info"><?= Yii::t('app', 'Raspberry Pi') ?></span>
	</div>
</div>

<h2 class="page-header"><?= Yii::t('app', 'I recommend') ?></h2>

<div class="row">
<div class="col-md-4"><?= Html::img('@img/linuxfoundationlogo.jpg', ['class' => 'clearfix img-responsive', 'alt' => 'linux foundation']); ?></div>
	<div class="col-md-4"><?= Html::img('@img/firefox.jpg', ['class' => 'clearfix img-responsive', 'alt' => 'best mozilla']); ?></div>
	<div class="col-md-4"><?= Html::img('@img/libreoffice.png', ['class' => 'clearfix img-responsive', 'alt' => 'office fundation']); ?></div>
</div>





