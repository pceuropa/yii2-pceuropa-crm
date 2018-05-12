<?php

$this->title = 'PCEUROPA Free Software to change the world for the better.';
Yii::$app->view->registerMetaTag([
		'name' => 'description',
		'content' => Yii::t('app', 'I want to change the world, myself and my applications for better')
	]); 
		
?>
<h1 class="page-header"><?= Yii::t('app', 'Free Software') ?></h1>
<?php $this->render('_free_software'); ?>
<!--  $this->render('_services_projects'); -->
<?= $this->render('_services_products'); ?>
