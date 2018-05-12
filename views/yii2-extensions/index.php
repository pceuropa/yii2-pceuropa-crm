<?php
use yii\helpers\Html;
use app\widgets\Lightbox;
$this->title = Yii::t('app', 'yii2 install extension via composer');
$this->params['breadcrumbs'][] = $this->title;
Yii::$app->view->registerMetaTag([
		'name' => 'description',
		'content' => Yii::t('app', 'Free extension for Yii2 framework. MenuBuilder, Formbuilder, PHP7 JavaScript Ajax')
	]); 
?>


<h1>Yii2 extensions</h1>


<div class="panel panel-default">
  <div class="panel-body">
  <div class="row">
  
  	<div class="col-md-4">
  	<?= Lightbox::img('@web/images/formbuilder/scheme.png', true, 'form builder yii2'); ?>
  	</div>
  	
  	<div class="col-md-8">
  		<h2><?= Html::a (  Yii::t('app', 'Form builder'), ['yii2-forms'] ); ?></h2>
  		<p><b>Forms generator</b>. Drag and drop elements, creating database tables, sending from the form.
		<b>Rendering the form</b> of the scheme json. Validation of data from forms (Dynamic Model Yii2) </p>
		
		
		
		<pre class="bash"><code>composer require pceuropa/yii2-forms dev-master</code></pre>	
  	</div>
  	
  </div>
</div>

<div class="panel panel-default"><div class="panel-body">
  	<div class="row">
  
	  	<div class="col-md-4">
	  	<?= Lightbox::img('@web/images/menubuilder/MenuBuilder.png', true, 'menu builder yii2', 'menu'); ?>
	  	</div>
  	
	  	<div class="col-md-8">
	  		<h2><?= Html::a ( Yii::t('app', 'Boostrap Menu builder'), ['yii2-menu'] ); ?></h2>
	  		<p><b>Menu bootstrap builder</b>. Drag and drop elements, data storage in database.
		
			<pre class="bash"><code>composer require pceuropa/yii2-menu dev-master</code></pre>	
	  	</div>
  	
  </div>
  
  
</div></div>

<div class="panel panel-default">
<div class="panel-body">
  <div class="row">
  
	  	<div class="col-md-4">
	  		<?= Lightbox::img('@web/images/yii2-ajax-sort/sorting-items.png', true, 'sorting items', 'sort'); ?>
	  	</div>
  	
	  	<div class="col-md-8">
	  		<h2><?= Html::a ( Yii::t('app', 'Sorting items Drag-Drop AJAX'), ['yii2-ajax-sort'] ); ?></h2>
	  		<p><b>Sortable widget</b>. Drag and drop items, without controllers. Helper to Ajax request/response.
		
			<pre class="bash"><code>composer require pceuropa/yii2-ajax-sort dev-master</code></pre>	
	  	</div>
  	
  </div>

</div></div>

<div class="panel panel-default">
  <div class="panel-body">
   <div class="row">
  
	  	<div class="col-md-4">
	  		<?= Lightbox::img('@web/images/language-select.png', true, 'language select widget','lang'); ?>
	  	</div>
  	
	  	<div class="col-md-8">
	  		<h2><?= Html::a (  Yii::t('app', 'Boostrap Dropmenu select languages'), ['yii2-language-selection-widget']  ); ?></h2>
	  		<p><b>Language select widget</b>. All flags in assets.
		
			<pre class="bash"><code>composer require pceuropa/yii2-language-selection-widget dev-master</code></pre>	
	  	</div>
  	
  </div>
  
  </div>
</div>

<?php
	echo Lightbox::img('@web/images/formbuilder/formbuilder.png', false);
	echo Lightbox::img('@web/images/formbuilder/formbuilder_jsonview.png', false);
	echo Lightbox::img('@web/images/formbuilder/formbuilder_textview.png', false);
	echo Lightbox::img('@web/images/formbuilder/formbuilder_export_data.png', false);
	
	
	$this->registerJsFile('/js/lightbox.js', ['position' => 3, 'depends' => 'yii\web\YiiAsset']);
    $this->registerCssFile('/css/lightbox.css');
  	$this->registerJsFile('/js/prism.js', ['position' => 3, 'depends' => 'yii\web\YiiAsset']);
    $this->registerCssFile('@web/css/prism.css');
?>
