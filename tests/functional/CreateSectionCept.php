<?php 

$I = new FunctionalTester($scenario);
$I->am('a CMS Admin');
$I->wantTo('create a new section');


// When
$I->amOnPage('sections');
// And
$I->click('Add a new section');


// Then
$I->seeCurrentUrlEquals('/sections/create');
$I->see('New section', 'h1');


$I->amGoingTo('Omit the name field in order to submit an invalid form');
// When
$I->fillField('Slug URL', 'our-company');
$I->click('Create section');
// Then
$I->expectTo('See the form again with the errors');
$I->seeCurrentUrlEquals('/sections/create');
$I->seeInField('Slug URL', 'our-company');
$I->see('The name field is required', '.error');


$I->amGoingTo('fill a valid form');
// When
$I->fillField('Name', 'Our company');
$I->fillField('Slug URL', 'our-company');
$I->selectOption('type', 'page');
$I->selectOption('menu', 1);
$I->fillField('menu_order', 2);
$I->selectOption('published', 0);
// And
$I->click('Create section');


// Then
$I->seeCurrentUrlEquals('/sections/1');
$I->see('Our company', 'h1');
// And
$I->seeRecord('sections', [
	'name' => 'Our company',
	'slug_url' => 'our-company',
	'type' => 'page',
	'menu' => 1,
	'menu_order' => 2,
	'published' => 0
]);