<?php
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use kartik\widgets\FileInput;
use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $searchModel app\models\usersearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users Area';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
	<div class="col-md-3"> 
	<?php
	if ($model->img !== ''&& isset($model->img)) { 
echo Html::img( ['@author/'.$model->img] , ['class' => "img-thumbnail pceuropa-avatar"]);
	} 

	$form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]);
	echo  $form->field($model, 'file')->fileInput();
	?>
	</div>
	
	<div class="col-md-9">
	<?= $form->field($model, 'name');?>
	
	<div class="row">
	<div class="col-md-6">
	<?= $form->field($model, 'birth')->widget(DatePicker::classname(), [
		'options' => ['placeholder' => ''],
		'type' => DatePicker::TYPE_COMPONENT_APPEND,
		'pluginOptions' => [
		'language' => 'pl',
		'autoclose'=>true,
		'format' => 'yyyy',
		'viewMode' => 'years',
		'minViewMode' => 'years'
		]
		]);
	 ?>
	</div>
	<div class="col-md-6"><?= $form->field($model, 'place_birth');?> </div>
	</div>

	<?= $form->field($model, 'description')->textarea();
	echo Html::submitButton(Yii::t('app', 'Update'), ['class' => 'btn btn-primary']);
	ActiveForm::end();?>


	</div>
</div>


  


