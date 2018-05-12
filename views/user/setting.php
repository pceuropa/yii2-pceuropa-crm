<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

		<?php $form = ActiveForm::begin(['layout' => 'horizontal']);
		echo $form->field($model, 'email');
		echo $form->field($model, 'password')->passwordInput() ;

		echo Html::submitButton(Yii::t('yii', 'Update'), ['class' => 'btn btn-primary']);

		ActiveForm::end();?>
