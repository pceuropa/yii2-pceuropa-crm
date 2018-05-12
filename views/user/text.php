<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\usersearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', Yii::$app->controller->action->id.'s');
$this->params['breadcrumbs'][] = $this->title;
?>
		
<?= Html::a(Yii::t('app', 'Add text'), ['create'], ['class' => 'btn btn-success']) ?>

<?= GridView::widget([
'dataProvider' => $dataProvider,
'filterModel' => $searchModel,
'columns' => [
	'title',
	'date',

	[
		'attribute' => 'category_id',
		'value' => function ($m, $key) {
						return  Yii::t('app', $m::getCategoryById($m->category_id));
					},
		'filter' => Html::activeDropDownList($searchModel, 'category_id', $searchModel::getCategoriesTranslate(),['class'=>'form-control','prompt' => Yii::t('app', 'All')]),
	],


	['class' => 'yii\grid\ActionColumn', 'buttons' => [
		'view' => function ($url, $m, $key) {
			return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', ['text/view', 'id' => $key],  ['target' => '_blank']);
		},
		
	]],
],
]); ?>
	