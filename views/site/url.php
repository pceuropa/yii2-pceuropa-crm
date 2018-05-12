<?php
$this->title = Yii::t('app', 'Test URL - Website availability');
$this->params['breadcrumbs'][] = Yii::t('app', 'Services') 	;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-6 col-md-offset-3">
		<ul class="list-group">
		<li class="list-group-item">

        <small><?= Yii::t("app", "Test site available");?></small>
        </li>
		<li class="list-group-item">
          <?php echo $this->render('testform'); ?>

      </li> 
		<li class="list-group-item">

         <div id="alert-success" class="row hide alert alert-success form-group">
<?= Yii::t("app", "Siteweb on URL is access");?> 
         </div>

         <div id="alert-danger" class="row hide alert alert-danger form-group">
<?= Yii::t("app", "Siteweb on URL is done");?>
         </div>

<?= Yii::t("app", " Can not load URL? How to check if the page is working? With this application, you will check if the website opens correctly.");?>
        </li>
		</ul>
	</div>

<?php $this->registerJsFile('/js/testurl.js', [ 'depends' => 'yii\web\YiiAsset']); ?>
