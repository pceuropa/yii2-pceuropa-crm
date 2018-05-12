<?php
    use yii\helpers\Html;
?>

<div class="row">

	<div class="col-md-6">
		<h2><?= Yii::t('app', 'Our services') ?></h2>
		<ul class="list-group">
		<li class="list-group-item"><?= Yii::t('app', 'Websites, Email and Hosting') ?></li>
		<li class="list-group-item"><?= Yii::t('app', 'Prototyping and software development') ?></li>
		<li class="list-group-item"><?= Yii::t('app', 'Internet services') ?></li>
		</ul>
	</div>

	<div class="col-md-6">
		<h2><?=  Yii::t('app', 'Projects'); ?></h2>
		
		<ul class="list-group">

			<li class="list-group-item">
                <?= Html::a(Yii::t('app', 'Bootstrap Form Generator Online'), ['form-generator']);?>
			</li>
			<li class="list-group-item">
				Universe@Home <span class='pull-right'><?= Yii::t('app', 'Website of the research project - Astronomy') ?><span>
			</li>
			<li class="list-group-item">
				Radioactive@Home   <span class='pull-right'>World map radioactivity <span>
			</li>
		</ul>
		
	</div>
	
</div>
