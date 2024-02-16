<?php

use yii\helpers\Url;

// tests/acceptance/RegisterCest.php
class RegisterCest
{
    public function _before(AcceptanceTester $I)
    {
        // Executed before each test
    }

    public function _after(AcceptanceTester $I)
    {
        // Executed after each test
    }

    // Test user registration
    public function testUserRegistration(AcceptanceTester $I)
    {
        $I->amOnPage('/site/register');
        $I->see('Register', 'h1');

        // Fill in the registration form fields
        $I->fillField('input[name="RegistrationForm[name]"]', 'testuser');
        $I->fillField('input[name="RegistrationForm[lastname]"]', 'testuser');
        $I->fillField('input[name="RegistrationForm[login]"]', 'testuser');
        $I->fillField('input[name="RegistrationForm[password]"]', 'password123');

        // Submit the registration form
        $I->click('Register');

        // Assert that the user is redirected to the login page
        $I->see('Login', 'h1');
    }
}
