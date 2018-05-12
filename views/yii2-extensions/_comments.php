<h3><?= Yii::t('app', 'Comments')  ?></h3>

<div id="disqus_thread"></div>
<script>
	(function() { // DON'T EDIT BELOW THIS LINE
		var d = document, s = d.createElement('script');
		s.src = '//pceuropa-net.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
	})();
</script>


<?php $this->registerJsFile('//pceuropa-net.disqus.com/count.js', ['position' => 3, 'id' => 'dsq-count-scr', 'async' => '']);?>
