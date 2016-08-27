<?php

namespace tests\codeception\backend\functional;

use tests\codeception\backend\FunctionalTester;
use tests\codeception\common\_pages\LoginPage;

/* @var $scenario \Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->wantTo('ensure login page works');

$loginPage = LoginPage::openBy($I);

$I->amGoingTo('submit login form with no data');
$loginPage->login('', '');
$I->expectTo('see validations errors');
$I->see("Необхідно вказати ім'я користувача", '.help-block');
$I->see('Необхідно вказати пароль.', '.help-block');

$I->amGoingTo('try to login with wrong credentials');
$I->expectTo('see validations errors');
$loginPage->login('admin', 'wrong');
$I->expectTo('see validations errors');
$I->see("Ім'я користувача або пароль вказано некоректно.", '.help-block');

$I->amGoingTo('try to login with correct credentials');
$loginPage->login('erau', 'password_0');
$I->expectTo('see that user is logged');
$I->see('Logout (erau)', 'form button[type=submit]');
$I->dontSeeLink('Login');
$I->dontSeeLink('Signup');
