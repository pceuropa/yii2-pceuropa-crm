<?php

# @Copyright 2017 Rafal Marguzewicz pceuropa.net

use yii\helpers\Html;
use yii\helpers\Url;
use pceuropa\sort\SortWidget;

$this->title = Yii::t('app', 'Yii2 ajax sort');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'yii2 extensions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
 
 <div class="row">
	<div class="col-md-8">
		<h1>Sorting items Drag Drop AJAX</h1>
<?= Html::a ( 'pceuropa/yii2-ajax-sort', 'https://github.com/pceuropa/yii2-ajax-sort' ); ?>
</h1>
		<h2>Installation</h2>
		<pre><code>composer require pceuropa/yii2-ajax-sort dev-master</code></pre>

	 	<h2>Usage</h2>
	 
<pre><code>use yii\helpers\Url;
use pceuropa\sort\SortWidget;

echo SortWidget::widget([
	'image_url' => Url::to('@web/images/'),
	'data' => [
		['id' => 1, 'image_name'  => 'firefox.jpg', 'title' => 'text alternative'],
		['id' => 2, 'image_name'  => 'opera.jpg'],
		['id' => 3, 'image_name'  => 'chrome.jpg'],
		['id' => 4, 'image_name'  => 'ie.jpg'],
		['id' => 5, 'image_name'  => 'safari.jpg'],
		['id' => 6, 'title'  => 'text element', 'url' => 'https://'],
	], 
]); 

</code></pre>

<h2>Controller example</h2>

<pre><code>public function actionSort(){
    
	$request = Yii::$app->request;
	
	if ($request->isAjax && $request->post('serialize')){ // ajax sort request
	
		$array = $request->post('array');
		
		foreach ($array as $key => $val){
	
			$m = $this->findModel($val);
			$m->serialize = $key;
			$m->save();
		}
		return  \yii\helpers\Json::encode(['success' => true,]);
	}
	
	$model = new Model;
	
	if ($model->load($request->post()) && $model->save() ) { // ex. submit form upload file
		return $this->render('index', ['model' => $model]);
	} 
	
	return $this->render('index');
	
}</code></pre>

	</div>
	
	<div class="col-md-4">
	<h3>Demo</h3>
            <?= SortWidget::widget([
                'image_url' => Url::to('@web/images/yii2-ajax-sort/'),  // example Url::to('@www', 'http'),
                'data' => [
                	['id' => 1, 'image_name'  => 'firefox2.jpg', 'title' => 'text alternative'],
                	['id' => 2, 'image_name'  => 'opera.jpg'],
                	['id' => 3, 'image_name'  => 'chrome.jpg'],
                	['id' => 4, 'image_name'  => 'ie.jpg'],
                	['id' => 5, 'title'  => 'text element', 'url' => 'https://en.wikipedia.org/wiki/Vegetarianism'],
                ], 
            ]) ?>
            Request Ajax:
            <div class='well' id="message_request"></div>
            Response Json:
            <div class='well' id="message_response"></div>
    </div>
</div>
