<?php
#Copyright (c) 2017 Rafal Marguzewicz pceuropa.net
use yii\helpers\Html;

$this->title = 'Form generator Yii2';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Yii2 extensions'), 'url' => ['yii2-extensions/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Form Builder') , 'url' => ['manual']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Forms list') , 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Form create');


echo \pceuropa\forms\FormBuilder::widget([
		'test_mode' => false,
		'easy_mode' => false,
		'email_response' => true,
]);
?>
