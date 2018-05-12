<?php
#Copyright (c) 2017 Rafal Marguzewicz pceuropa.net
use yii\helpers\Html;

$this->title = 'Surverys Generate';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Forms') , 'url' => ['user']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Form create');


echo \pceuropa\forms\FormBuilder::widget([
		'test_mode' => false,
		'easy_mode' => false,
		'email_response' => true,
]);
?>
