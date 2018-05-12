<?php
use yii\helpers\Html;

$this->title = 'FormBuilder: Free Software Open Source';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Yii2 extensions'), 'url' => ['yii2-extensions/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Form'), 'url' => ['forms/manual']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Yii::t('app', 'FormBuilder <small>Free Software Open Source</small>') ?></h1>

<div class="row">
	<div class="col-md-8">
	<?= Html::a(Yii::t('app', 'Create form'), ['create'], ['class' => 'btn btn-success']) ?>
	
   <?= \yii\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title',
             [
				'attribute' => 'url',
				'format' => 'html',
				'value' => function ($m, $key) {
							return  Html::a ( $m->url, ['forms/view', 'url' => $m->url], ['target' => 'new']);
						},
			],

            ['class' => 'yii\grid\ActionColumn',
            
            'buttons' => [
		        'view' => function ($url, $model, $key) {
					return Html::a ( '<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> ', ['view', 'url' => $model->url] );
				},
		        'list' => function ($url, $model, $key) {
					return Html::a ( '<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> ', ['list', 'id' => $model->form_id] );
				},
		        'clone' => function ($url, $model, $key) {
					return Html::a ( 'clone', ['clone', 'id' => $model->form_id] );
				},
            ],
			'template' => '{update} {view} {delete} {list} {clone}'
            
            
            ],
        ],
    ]); ?>
    
    <div class="row">
    	
    </div></div>
	<div class="col-md-4">
		<div class="well">
    	 <?= Yii::t('app', 'You can create forms or generate only code html, yii2, json and embed in your app or website. Questionnaire, Contact form and much more.')  ?>
    	 <br/ > <?= Html::a(Yii::t('app', 'Description integration FormBuider'), ['manual'], ['class' => 'btn btn-info pull-right']) ?>
    	</div>
    	
    	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> - <?= Yii::t('app', 'Edit form')  ?><br />
    	<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> - <?= Yii::t('app', 'View form')  ?><br />
    	<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> - <?= Yii::t('app', 'Delete form')  ?><br />
    	<span class="glyphicon glyphicon-list" aria-hidden="true"></span> - <?= Yii::t('app', 'Data received from completed forms')  ?><br />
    	
	
	</div>
</div>


    
