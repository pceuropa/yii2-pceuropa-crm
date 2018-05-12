<?php use yii\helpers\Html; ?>

<div class="row">
	<div class="col-md-6">
		<h2><?= Yii::t('app', 'Services') ?></h2>
		<ul class="list-group">
        <li class="list-group-item"><?= Html::a(Yii::t('app', 'Free online surveys and questionnaires'), ['forms/module/index']);?></li>
        <li class="list-group-item"><?= Html::a(Yii::t('app', 'Bootstrap Form Generator Online'), ['form-generator/index']);?></li>
        <li class="list-group-item"><?= Html::a(Yii::t('app', 'Test URL - Website availability'), ['site/url']);?></li>
        <li class="list-group-item"><?= Html::a(Yii::t('app', 'Test SEO online - Website optimalization'), ['site/seo']);?></li>
		<li class="list-group-item"><?= Yii::t('app', 'Websites, Email and Hosting') ?></li>
		<li class="list-group-item"><?= Yii::t('app', 'Prototyping and software development') ?></li>
		</ul>
	</div>

<div class="col-md-6">
		<h2><?=  Yii::t('app', 'Products Open Source'); ?></h2>
		<ul class="list-group">
          <li class="list-group-item">
          <?= Html::a ( Yii::t('app', 'Yii2 extensions'), ['yii2-extensions/index'] ); ?>
          <ol>
		  <li><?= Html::a ( 'FormBuilder', ['yii2-extensions/yii2-forms']); ?> (pceuropa/yii2-forms)</li>
		  <li><?= Html::a ( 'MenuBuilder', ['yii2-extensions/yii2-menu']); ?> (pceuropa/yii2-menu)</li>
		  <li><?= Html::a ( 'Ajax sort list', ['yii2-extensions/yii2-ajax-sort']); ?> (pceuropa/yii2-ajax-sort)</li>
          </ol>
          
          </li>
          <li class="list-group-item">
              <?= Html::a ( Yii::t('app', 'Python Modules'), ['python-modules/index'] ); ?> 
                <ol>
		  <li> <?= Html::a ( 'PyEmailWebsiteDown', ['python-modules/py-email-website-down']); ?></li>
                </ol>
            </li>
		</ul>
	</div>
</div>
