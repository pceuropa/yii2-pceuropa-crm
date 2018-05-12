<?php

    use yii\helpers\Html;

?><?= Yii::t('app', 'Create forms you bored?')  ?><br />
<ul>
  <li><?= Html::a ( Yii::t('app', 'yes'), ['forms/create'], ['target' => 'new'] ); ?></li>
  <li><?= Yii::t('app', 'no')  ?></li>
</ul>
