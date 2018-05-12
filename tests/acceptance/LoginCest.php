<?php
use yii\helpers\Url as Url;

class LoginCest
{
    public function ensureThatLoginWorks(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/login'));
        $I->amGoingTo('try to login with correct credentials');
        $I->fillField('input[name="LoginForm[email]"]', 'info@pceuropa.net');
        $I->fillField('input[name="LoginForm[password]"]', 'zoo007');
        $I->click('login-button');
        $I->expectTo('see user info');
        $I->see('Free Software');
    }
}
