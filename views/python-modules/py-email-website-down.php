<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Python Modules'), 'url' => ['python-modules/index']];
$this->params['breadcrumbs'][] = 'PyEmailWebsiteDown';

$this->title = 'Monitoring the Availability of Web Pages | Free Website Test';
Yii::$app->view->registerMetaTag([
		'name' => 'description',
		'content' => Yii::t('app', 'Set your own python application to check websites URL, message notification e-mail when the website is down')
	]); 
	
	
?>

<div class="row">
	<div class="col-md-8">
    <h1><?= Yii::t('app', 'Free Monitoring the Availability of Web Pages');?></h1>

<?= Yii::t('app', 'The application checks the Internet addresses from the list. If a page is not available, it sends an email message.');?>

<h2><?= Yii::t('app', 'Requirements');?></h2>
<?= Html::a ( 'Python3', 'https://www.python.org/'); ?>
<h2><?= Yii::t('app', 'Installation');?></h2>
<div class="row">
	<div class="col-md-9"><pre class="bash"><code>git clone https://github.com/pceuropa/PyEmailWebsiteDown.git</code></pre></div>
	<div class="col-md-3">or <?=  Html::a ( 'download', 'https://github.com/pceuropa/PyEmailWebsiteDown/archive/master.zip', ['class' => 'btn btn-success'] ); ?></div>
</div>

<h2><?= Yii::t('app', 'Configuration');?></h2>
Is in file config.py
<pre><code> sites = [
	'https://pceuropa.net/',
	'https://example.com',
]

smtp = {
	'server': 'smtp@example.com:587',
	'login': 'info@example.com',
	'password': 'pass',
	'From': 'info@example.com',
	'to': 'info@example.com',
} </code></pre>


<h2>Usage</h2>
<pre class="bash"><code> python3 testurl.py </code></pre>

You can set cron to check your websites daily 

<pre class="bash"><code>  crontab -e </code></pre>

add the line 
<pre><code> 59 23 * * * python3 /path/to/PyEmailWebsiteDown/testurl.py </code></pre>


</div>
	<div class="col-md-4">
		<?=  $this->render('@views/_badge', [ 'app' => 'PyEmailWebsiteDown', ]); ?>
		<?=  $this->render('@views/_form-ads'); ?>
		<?=  $this->render('@views/_donate'); ?>
	</div>
</div>


<?php

    $this->registerJsFile('/js/prism.js', ['position' => 3, 'depends' => 'yii\web\YiiAsset']);
    $this->registerCssFile('@web/css/prism.css');

?>

