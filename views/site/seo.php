<?php
$this->title = Yii::t('app', 'Test SEO online - Website optimalization');
$this->params['breadcrumbs'][] = Yii::t('app', 'Services')  ;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-md-6 col-md-offset-3">
    <ul class="list-group">
    <li class="list-group-item"><?= Yii::t("app", "Enter site address, you would like to test in term SEO");?></li>
      <li class="list-group-item"> <?= $this->render('testform'); ?></li>
	</ul>

    <div id="title" class="alert alert-danger" role="alert">
        <?= Yii::t("app", "Meta title should have between 40 and 70 characters");?>
    </div>
    <div id="description" class="alert alert-danger" role="alert">
        <?= Yii::t("app", "Meta description should have between 70 and 190 characters");?>
    </div>
    <div id="h1" class="alert alert-danger" role="alert">
        <?= Yii::t("app", "No tilte (h1) on page");?>
    </div>
    <div id="h2" class="alert alert-warning" role="alert">
        <?= Yii::t("app", "No tilte (h2) on page");?>
    </div>
    <div id="url_check" class="alert alert-warning" role="alert">
        <?= Yii::t("app", 'Consider changing the characters "_" on "-" in the page address (URL)');?>
    </div>
    <div id="photos" class="alert alert-danger" role="alert">
        <?= Yii::t("app", 'At least one of the images does not have an ALT attribute');?>
    </div>
    <div id="keys_in_h1" class="alert alert-danger" role="alert">
        <?= Yii::t("app", 'No keywords in the title (h1)');?>
    </div>
    <div id="keys_in_body" class="alert alert-danger" role="alert">
        <?= Yii::t("app", 'No keywords in the text');?>
    </div>
    <div id="redirect_www" class="alert alert-warning" role="alert">
        <?= Yii::t("app", 'No redirect WWW and non-WWW. The site should be available at one address');?>
    </div>
</div> <!-- end  col-md-6-->

<?php 
$this->registerJsFile('/js/testseo.js', [ 'depends' => 'yii\web\YiiAsset']);
$this->registerCss("
  .alert { display: none; }
  .alert .show { display: block; }
");
?>
