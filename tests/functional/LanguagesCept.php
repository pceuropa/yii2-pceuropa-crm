<?php
$I = new FunctionalTester($scenario);
$languages = ['ar', 'de', 'el', 'es', 'et', 'fa', 'fi', 'fr', 'he'];

$I->wantTo('Open home page with translation pl');
$I->amOnPage(['site/index', 'lang' => 'pl']);
$I->see('Darmowe oprogramowanie', 'h1');

$I->wantTo('Open home page with translation');
for ($i = 0; $i < count($languages); $i++) {
    $I->amOnPage(['site/index', 'lang' => $languages[$i]]);
    $I->seeElement('a.navbar-brand');
}

$I->wantTo('Open list of languages - not access');
$I->amOnRoute('translatemanager/language/list');
$I->see('Forbidden');

$I->wantTo('+');
$I->wantTo('+');
