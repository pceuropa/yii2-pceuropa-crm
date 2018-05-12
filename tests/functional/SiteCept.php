<?php

$I = new FunctionalTester($scenario);

/**
 * @var string Logo of page
 */
 $logo = 'a.navbar-brand';
/**
 * @var string Message for logged or onwer form
 */
 $notAllow = 'You are not allowed to perform this action.';

/**
 * @var string Only post method for delete
 */
 $onlyPost = 'Method Not Allowed. This url can only handle the following request methods: POST.';

/**
 * @var string Message on site/login page
 */
 $siteLogin= 'I forgot password.';

foreach ([
     'site/index' => $logo,
     'site/about' => $logo,
   'site/contact' => $logo,
        ] as $key => $value) {

    $I->wantTo($key);
    $I->amonroute($key);
    $I->seeElement($value);
}

$I->wantTo('Logout');
$I->amOnRoute('site/logout');
$I->see('i forgot password.');

$I->wantTo('User Setting');
$I->amOnRoute('user/setting');
$I->see('I forgot password.');

$I->wantTo('+');
