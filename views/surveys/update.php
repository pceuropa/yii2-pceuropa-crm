<?php

use yii\helpers\Html;
$this->title = Yii::t('app', 'FormBuilder Ajax update') ;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Forms list') , 'url' => ['surveys/user']];
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
