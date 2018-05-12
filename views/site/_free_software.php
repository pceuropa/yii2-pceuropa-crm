<?php

    use yii\helpers\Html;
    use yii\helpers\Url;

?>

<div class="row">
	<h1 class="page-header"><?= Yii::t('app', 'Free Software') ?></h1>
 
    <div class="col-md-4">
    <h3><?= Html::a ( Yii::t('app', 'Yii2 extensions'), ['yii2-extensions/index'] ); ?></h3>
        
        <ul class="list-group">
		  <li class="list-group-item"> 	<?= Html::a ( 'yii2-menu', ['yii2-extensions/yii2-menu']); ?></li>
		  <li class="list-group-item">  <?= Html::a ( 'yii2-ajax-sort', ['yii2-extensions/yii2-ajax-sort']); ?></li>
		  <li class="list-group-item">  <?= Html::a ( 'yii2-forms', ['yii2-extensions/yii2-forms']); ?></li>
		</ul>
    </div>
    
    
    <div class="col-md-4">
    <h3><?= Html::a ( Yii::t('app', 'Python Modules'), ['python-modules/index'] ); ?></h3>
        
      	<ul class="list-group">
		  <li class="list-group-item"> <span class="badge">6</span> <?= Html::a ( 'PyEmailWebsiteDown', ['python-modules/py-email-website-down']); ?></li>
		</ul>
    </div>
    
    <div class="col-md-4">
        <h3>Java Script</h3>
    </div>
    
</div>
