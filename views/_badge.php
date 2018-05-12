<?php use yii\helpers\Html;?>

<a aria-label="Stars pceuropa/<?= $app ?> on GitHub" data-count-aria-label="# stargazers on GitHub" data-count-api="/repos/pceuropa/<?= $app ?>#stargazers_count" data-count-href="/pceuropa/<?= $app ?>/stargazers" data-icon="octicon-star" href="https://github.com/pceuropa/<?= $app ?>" class="github-button">Stars</a>
<a aria-label="Follow @pceuropa on GitHub" data-count-aria-label="# followers on GitHub" data-count-api="/users/pceuropa#followers" data-count-href="/pceuropa/followers" href="https://github.com/pceuropa" class="github-button">Follow @pceuropa</a>
<p>
	<?= Html::img('https://poser.pugx.org/pceuropa/'.$app.'/v/stable'); ?>
	<?= Html::img('https://poser.pugx.org/pceuropa/'.$app.'/license'); ?>
	<?= Html::img('https://poser.pugx.org/pceuropa/'.$app.'/downloads'); ?>
</p>	

<?php $this->registerJsFile('https://buttons.github.io/buttons.js', ['position' => 3, ]);?>
