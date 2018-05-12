<?php

use yii\helpers\Html;
$this->title = Yii::t('app', 'FormBuilder Ajax update') ;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Yii2 extensions'), 'url' => ['yii2-extensions/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Form Builder') , 'url' => ['manual']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Forms list') , 'url' => ['index']];
$this->params['breadcrumbs'][] =  Yii::t('app', 'Form {name}', ['name' => $this->title]);

echo \pceuropa\forms\FormBuilder::widget([
	'table' => 'poll_',     // 'form_' . $id
	'easy_mode' => false,
	'email_response' => true,
	'config' => [
			'get'=> true, 
			'save'=> true, 
			'autosave' => true,
		]
]);
?>
