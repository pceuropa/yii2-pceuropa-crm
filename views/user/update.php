<?php

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = Yii::t('app', 'Update', [ 'modelClass' => 'text', ]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'text'), 'url' => ['text']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<?= $this->render('_form', ['model' => $model, ]) ;?>