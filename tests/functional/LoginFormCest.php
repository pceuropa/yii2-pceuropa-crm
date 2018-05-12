<?php
class LoginFormCest
{
    public function _before(\FunctionalTester $I) {
        $I->amOnRoute('site/login');
    }

    public function openLoginPage(\FunctionalTester $I) {
        $I->see('Login', 'button');

    }

public function internalLoginByInstance(\FunctionalTester $I)
    {
        $I->amLoggedInAs(\app\models\User::findByEmail('info@pceuropa.net'));
        $I->amOnPage('/');
        $I->see('Your Profil');
    }

    public function loginWithEmptyCredentials(\FunctionalTester $I)
    {
        $I->submitForm('#login-form', []);
        $I->expectTo('see validations errors');
        $I->see('Email cannot be blank.');
        $I->see('Password cannot be blank.');
    }

    public function loginWithWrongCredentials(\FunctionalTester $I)
    {
        $I->submitForm('#login-form', [
            'LoginForm[email]' => 'admin',
            'LoginForm[password]' => 'wrong',
        ]);
        $I->expectTo('see validations errors');
        $I->see('Incorrect email or password.');
    }

    public function loginSuccessfully(\FunctionalTester $I)
    {
        $I->submitForm('#login-form', [
            'LoginForm[email]' => 'info@pceuropa.net',
            'LoginForm[password]' => 'zoo007',
        ]);
        $I->see('Your Profil');
        $I->dontSeeElement('form#login-form');              
    }

}
