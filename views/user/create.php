<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = Yii::t('app', 'Create');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', ['model' => $model,]) ?>
