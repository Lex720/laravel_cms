<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('filter de sections list');


// Metodos personalizados para haveRecord - tests\_support\FunctionalHelper.php
$I->haveSection(); //Created "Our company" section
$sections = $I->haveSections(); //Created random sections
// And
$I->amOnPage('sections');
// Then
$I->seeElement('input', ['name' => 'name']);


// When 
$I->fillField('name', 'company');
$I->selectOption('published', '1');
// And
$I->click('Filter sections');


// Then
$I->seeCurrentUrlEquals('/sections?name=company&published=1&menu=');
$I->expectTo('not to see our company record');
// Then
$I->see('There are 0 sections');
$I->dontSee('Our company', 'td.name');
$I->seeInField('name', 'company');


// When
$I->selectOption('published', '0');
$I->selectOption('menu', '0');
// And
$I->click('Filter sections');
// Then
$I->see('There are 0 sections');
$I->dontSee('Our company', 'td.name');


// When
$I->seeOptionIsSelected('published', 'Draft');
$I->selectOption('menu', '1');
// And
$I->click('Filter sections');
// Then
$I->see('Our company', 'td.name');
$I->dontSee($sections->first()->name, 'td.name');
$I->dontSee($sections->last()->name, 'td.name');