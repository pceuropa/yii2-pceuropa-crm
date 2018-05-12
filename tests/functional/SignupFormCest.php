<?php
class SignupFormCest
{
    public function _before(\FunctionalTester $I) {
        $I->amOnRoute('site/signup');
    }

    public function openSignupPage(\FunctionalTester $I) {
        $I->see('Signup', 'h1');

    }
}
