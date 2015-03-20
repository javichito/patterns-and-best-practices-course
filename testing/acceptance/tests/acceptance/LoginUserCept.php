<?php
$I = new AcceptanceTester($scenario);

$I->wantTo('login in the site');

$I->amOnPage('/auth/login');
$I->fillField('email', 'jh@mambo.pe');
$I->fillField('password', 'prueba');
$I->click('//button');
$I->see('You are logged in!');
