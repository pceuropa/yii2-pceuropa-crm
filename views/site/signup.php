<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\SignupForm */

$this->title = 'Rejestrowanie się w bazie wierszy cytatów autorów tekstów';
?>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
		<h1><?= Html::encode(Yii::t('app', 'Signup')) ?></h1>
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Signup'), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>