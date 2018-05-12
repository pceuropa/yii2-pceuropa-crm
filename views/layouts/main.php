<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use app\widgets\Alert;
AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

		<?= $this->render('_navbar');?>

		<div class="wrap container">
		    <?= Breadcrumbs::widget([ 
		    	'homeLink' => [
    				'label' => '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>',
		  			'encode' => false,
		  			'url' => Url::home(),
					],
		    	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		     ]) ?>
            <?= Alert::widget() ?>

		    <?= $content ?>
		</div>
		
<?= $this->render('_footer.php'); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
