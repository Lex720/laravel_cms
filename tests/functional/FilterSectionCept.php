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
$I->seeElement('input', ['name' => 'search_name']);


// When 
$I->fillField('search_name', 'Our company');
$I->selectOption('search_published', '1');
// And
$I->click('Filter sections');


// Then
$I->seeCurrentUrlEquals('/sections?search_name=Our+company&search_published=1&search_menu=');
$I->expectTo('not to see our company record');
// Then
$I->see('There are 0 sections');
$I->dontSee('Our company', 'td.name');
$I->seeInField('search_name', 'Our company');


// When
$I->selectOption('search_published', '0');
$I->selectOption('search_menu', '0');
// And
$I->click('Filter sections');
// Then
$I->see('There are 0 sections');
$I->dontSee('Our company', 'td.name');


// When
$I->seeOptionIsSelected('search_published', 'Draft');
$I->selectOption('search_menu', '1');
// And
$I->click('Filter sections');
// Then
$I->see('Our company', 'td.name');
$I->dontSee($sections->first()->name, 'td.name');
$I->dontSee($sections->last()->name, 'td.name');