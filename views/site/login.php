<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
    

<div class="row">

    <div class="col-md-6 col-md-offset-3">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        
		<div class="row">
			<div class="col-md-6"><?= $form->field($model, 'email') ?></div>
			<div class="col-md-6"><?= $form->field($model, 'password')->passwordInput() ?></div>
		</div>
            
            <?= $form->field($model, 'rememberMe')->checkbox(['label' => Yii::t('app', 'Remember Me'),]) ?>
            
		<div style="color:#999;margin:1em 0">
            <?= Html::a(Yii::t('app', 'I forgot password'), ['site/request-password-reset']) ?>.
        </div>
            
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            
        <?php ActiveForm::end(); ?>
    </div>
    
</div>
