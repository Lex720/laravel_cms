<?php

$I = new FunctionalTester($scenario);
$I->am('a CMS Admin');
$I->wantTo('Update a section');


// Metodo personalizado para haveRecord
// tests\_support\FunctionalHelper.php
$I->haveSection();

// And
$I->amOnPage('sections/1');
$I->see('Edit section', '.btn-edit');


$I->amGoingTo('Edit a section');
// When
$I->click('Edit section');
// Then
$I->seeCurrentUrlEquals('/sections/1/edit');
// And
$I->see('Edit section "Our company"', 'h1');
$I->seeInField('name', 'Our company');
$I->seeInField('slug_url', 'our-company');
$I->seeOptionIsSelected('type', 'Page');
$I->seeOptionIsSelected('menu', '1');
$I->seeInField('menu_order', '2');
$I->seeOptionIsSelected('published', '0');


$I->amGoingTo('Submit an invalid form');
// When 
$I->fillField('name', '');
// And
$I->click('Update section');
// Then
$I->expectTo('See the form again with the errors');
$I->seeCurrentUrlEquals('/sections/1/edit');
$I->seeInField('name', '');
$I->see('The name field is required', '.error');


$I->amGoingTo('Submit a valid form');
// When 
$I->fillField('Name', 'Who we are');
$I->selectOption('published', 1);
// And
$I->click('Update section');
// Then
$I->expectTo('See the section details with the new changes');
$I->seeCurrentUrlEquals('/sections/1');
$I->see('Who we are', 'h1');
$I->seeRecord('sections', [
	'id' => 1,
	// changed
	'name' => 'Who we are',
	'published' => 1,
	// same
	'slug_url' => 'our-company',
	'type' => 'page',
	'menu' => 1,
	'menu_order' => 2,
]);