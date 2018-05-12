<?php
use yii\helpers\Url;
$I = new AcceptanceTester($scenario);

$I->wantTo('sign in');

$I->amOnPage(Url::toRoute('/polls/module/create'));
$I->see('Login');


$I->see('Form Builder');


