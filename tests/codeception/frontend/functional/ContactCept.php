<?php

namespace tests\codeception\frontend\functional;

use tests\codeception\frontend\FunctionalTester;
use tests\codeception\frontend\_pages\ContactPage;

/* @var $scenario \Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that contact works');

$contactPage = ContactPage::openBy($I);

$I->see('Contact', 'h1');

$I->amGoingTo('submit contact form with no data');
$contactPage->submit([]);
$I->expectTo('see validations errors');
$I->see('Contact', 'h1');
$I->see("Необхідно вказати ім'я користувача", '.help-block');
$I->see('Вказана некоректна адреса електронної пошти', '.help-block');
$I->see('Необхідно вказати тему листа', '.help-block');
$I->see('Необхідно написати текст листа', '.help-block');
$I->see('Перевірочний код заповнено некоректно', '.help-block');

$I->amGoingTo('submit contact form with not correct email');
$contactPage->submit([
    'name' => 'tester',
    'email' => 'tester.email',
    'subject' => 'test subject',
    'body' => 'test content',
    'verifyCode' => 'testme',
]);
$I->expectTo('see that email address is wrong');
$I->dontSee("Необхідно вказати ім'я", '.help-block');
$I->see('Вказана некоректна адреса електронної пошти.', '.help-block');
$I->dontSee('Необхідно вказати тему листа', '.help-block');
$I->dontSee('Необхідно написати текст листа', '.help-block');
$I->dontSee('Перевірочний код заповнено некоректно', '.help-block');

$I->amGoingTo('submit contact form with correct data');
$contactPage->submit([
    'name' => 'tester',
    'email' => 'tester@example.com',
    'subject' => 'test subject',
    'body' => 'test content',
    'verifyCode' => 'testme',
]);
$I->see('Ваш лист надіслано. Ми відповімо вам якомога швидше.');
