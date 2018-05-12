<?php
use yii\helpers\Html;
use yii\grid\GridView;

  $this->title = Yii::t('app', 'form data');
  $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User forms'), 'url' => ['surveys/user']];
  $this->params['breadcrumbs'][] = $this->title;
?>
    <h1><?= Html::encode($this->title) ?></h1>

	<?= GridView::widget([
        'dataProvider' => $dataProvider,
      //  'filterModel' => $searchModel,
        'columns' => $only_data_fields

            //['class' => 'yii\grid\ActionColumn'],
        ,
    ]); ?>
