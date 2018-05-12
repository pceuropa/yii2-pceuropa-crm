 <?php
 
     use yii\helpers\Html;
 
 ?><div class="jumbotron">
    <div class="row">
    	<div class="col-md-4"><?= Html::img('https://pceuropa.net/images/programmer.jpg', ['class' => 'clearfix img-responsive ']); ?></div>
    	<div class="col-md-8"><h3><?= Yii::t('app', 'Hello!') ?></h3>

        <p class="lead"><?= Yii::t('app', 'I am Rafal, Polish developer, living in the European Union.') ?></p>

	 	<?= Html::a ( Yii::t('app', 'About me'), ['site/about'], ['class' => 'btn btn-success'] ); ?>
    </div>
    	
</div>


