<?php
use app\models\Author;
use app\models\Category;
use app\models\Tag;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\checkbox\CheckboxX;
use kartik\widgets\Select2;
$this->registerJsFile('//cdn.ckeditor.com/4.6.2/basic/ckeditor.js');
$form = ActiveForm::begin(); ?>


<div class="row">
<div class="col-md-4">
	<?= $form->field($model, 'title') ?>
	<?php 
	echo $form->field($model, 'category_id')->widget(Select2::classname(), [
		'data' => Category::getCategory(),
		'options' => ['placeholder' => Yii::t('app', 'All'), 'multiple'=>false],
		'pluginOptions' => [ 'allowClear' => true, ],
		]);?>
		<?php $model->isNewRecord ? $model->author_id = Yii::$app->user->identity->id : '';
		
		echo $form->field($model, 'author_id')->widget(Select2::classname(), [
		'data' => Author::getAuthorArray(Yii::$app->user->identity->id),
		'options' => ['multiple'=>false],
		]);?>
</div>
	<div class="col-md-8">
		<?= $form->field($model, 'description')->textarea(['class' => 'ckeditor']);?>
	</div>
</div>




	<?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?php ActiveForm::end(); ?>
