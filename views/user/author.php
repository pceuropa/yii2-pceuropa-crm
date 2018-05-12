<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\usersearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Authors');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::a(Yii::t('app', 'Add Author'), ['create-author'], ['class' => 'btn btn-success']) ?>
		
<?= GridView::widget([
'dataProvider' => $dataProvider,
'filterModel' => $searchModel,
'columns' => [
'name',
'birth',
['class' => 'yii\grid\ActionColumn', 'buttons' => [

'delete' => function ($url, $model, $key) {
	return  Html::a('<span class="glyphicon glyphicon-trash"></span>',
	['user/delete-author', 'id' => $key] ,
	[ 'data-confirm' => 'Czy na pewno usunąć ten element?', 'data-method'=> 'post']);
},


'view' => function ($url, $model, $key) {
	return Html::a('<span class="glyphicon glyphicon-eye-open"></span>',
	['authors/view', 'id' => $key],  ['target' => '_blank']);
},
'update' => function ($url, $model, $key) {
	return Html::a('<span class="glyphicon glyphicon-pencil"></span>',
	['update-author', 'id' => $key]);
},
]],
],
]); ?>
	