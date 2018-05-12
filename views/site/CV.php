<?php

use yii\helpers\Html;
use pceuropa\languageSelection\LanguageSelection;

$this->title = Yii::t('app', 'About me: Full Stack Web Developer');
Yii::$app->view->registerMetaTag([
		'name' => 'description',
		'content' => Yii::t('app', 'Programmer, Reformer, Philosopher, Idiot')
	]); 
	
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">

	<div class="col-md-2">
		<?= Html::img('/images/rafal-developer.jpg', ['class' => 'clearfix img-responsive img-thumbnail', 'alt' => 'python php developer']); ?>
	</div>
	
	<div class="col-md-10">
      <h3>Rafał Margużewicz</h3>
      <dl class="dl-horizontal">
        <dt>T: </dt> <dd>+48 514 777 757 </dd>
        <dt>E: </dt> <dd> <a href="mailto:rafal@pceuropa.net">rafal@pceuropa.net</a></dd>
        <dt>Git: </dt> <dd><?= Html::a('pceuropa', "https://github.com/pceuropa"); ?> </dd>
        <dt>Blog: </dt> <dd> <?= Html::a('pceuropa.net/blog/', "http://pceuropa.dev/blog/pl/"); ?> </dd>
      </dl>
   </div>

</div>

<div class="row">

<div class="fill col-md-3">
<div class="fill row">
  <div class="fill panel panel-default">
    <div class="text-center panel-body">
    <b>Python Developer</b><br/><?= 2017 - Yii::t('app', 'obecnie'); ?>
    </div>
  </div>  
</div> 
</div> 



<div class="col-md-9">

 <div class="panel-group">
  <div class="panel panel-default">

    <div class="panel-heading">
      <h4 class="panel-title"> <a data-toggle="collapse" href="#coll1">onlycrypto.pl</a> </h4>
    </div>
    <div id="coll1" class="panel-collapse collapse">
      <div class="panel-body">
<?= Html::a('onlyCrypto.pl', "http://onlycrypto.pl/"); ?> - (PaaS, Django) agregacja danych w celu wyświetlania statystyk i wskaźników. Wyszukiwanie anomalii w danych.
   - (SaaS) bot giełdowy
   - infrastruktura na AWS
<br/>
<div class='pull-right'>
   <span class="label label-success">Python/Django</span> <span class="label label-success">JavaScript</span> <span class="label label-success">PostgreSQL</span> <span class="label label-danger">MongoDB</span> 

</div>

</div>
    </div>

  </div>
</div> 


 <div class="panel-group">
  <div class="panel panel-default">

    <div class="panel-heading">
      <h4 class="panel-title"> <a data-toggle="collapse" href="#coll2">Test URLs</a> </h4>
    </div>
    <div id="coll2" class="panel-collapse collapse">
      <div class="panel-body">
Test URLs   - (Django/JavaScript) – sprawdza dostępność usług web
</div>
      <div class="panel-footer">Technologie: Python, Django, JavaScript</div>
    </div>

  </div>
</div> 
 <div class="panel-group">
  <div class="panel panel-default">

    <div class="panel-heading">
      <h4 class="panel-title"> <a data-toggle="collapse" href="#coll3">Test SEO</a> </h4>
    </div>
    <div id="coll3" class="panel-collapse collapse">
      <div class="panel-body">

Test SEO - (Django/JavaScript) – sprawdza, czy strona WWW spełnia               standardy SEO

PyEmailWebsiteDown
   - automatyczne monitorowanie dostępności usługi HTTP/S. Jeżeli         usługa nie odpowiada, aplikacja informuje wiadomością e mail.
</div>
      <div class="panel-footer">Technologie: Python3, Django2, PostgreSQL, MongoDB, AWS</div>
    </div>

  </div>
</div> 


 <div class="panel-group">
  <div class="panel panel-default">

    <div class="panel-heading">
      <h4 class="panel-title"> <a data-toggle="collapse" href="#coll4">PyEmailWebsiteDown</a> </h4>
    </div>
    <div id="coll4" class="panel-collapse collapse">
      <div class="panel-body">
PyEmailWebsiteDown
   - automatyczne monitorowanie dostępności usługi HTTP/S. Jeżeli         usługa nie odpowiada, aplikacja informuje wiadomością e mail.
</div>
      <div class="panel-footer">Technologie: Python3, Django2, PostgreSQL, MongoDB, AWS</div>
    </div>

  </div>
</div> 






</div>



      </div>
  <div class="text-center col-md-3"><b>Trener</b><br/>2017</div> 
      <div class="col-md-9">d</div>
  <div class="text-center col-md-3"><b>JavaScript Developer</b><br/> 2016-2017</div> 
      <div class="col-md-9">d</div>
  <div class="text-center col-md-3"><b>Full Stack Web Developer</b><br/> 2011-2012</div> 
      <div class="col-md-9">d</div>
  <div class="text-center col-md-3"><b>Administrator Serwisu</b><br /> 2011-2012</div> 
      <div class="col-md-9">d</div>
  <div class="text-center col-md-3"><b>Webmaster</b> <br/> 2009-2013</div> 
      <div class="col-md-9">d</div>
</div>



<h2 class="page-header"><?= Yii::t('app', 'I recommend') ?></h2>

<div class="row">
<div class="col-md-4"><?= Html::img('@img/linuxfoundationlogo.jpg', ['class' => 'clearfix img-responsive', 'alt' => 'linux foundation']); ?></div>
	<div class="col-md-4"><?= Html::img('@img/firefox.jpg', ['class' => 'clearfix img-responsive', 'alt' => 'best mozilla']); ?></div>
	<div class="col-md-4"><?= Html::img('@img/libreoffice.png', ['class' => 'clearfix img-responsive', 'alt' => 'office fundation']); ?></div>
</div>
