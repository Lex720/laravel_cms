<?php

$I = new FunctionalTester($scenario);
$I->am('a CMS Admin');
$I->wantTo('List sections');

// Metodo personalizado para haveRecord
// tests\_support\FunctionalHelper.php
$sections = $I->haveSections();

// Imprime el array de sections
//dd($sections->toArray());

// And
$I->amOnPage('sections');
// Then
$I->see('Sections', 'h1');
$I->see('There are 10 sections');
$I->see($sections->first()->name, 'tbody tr:first-child td.name');
$I->see($sections->last()->name, 'tbody tr:last-child td.name');

$I->click('Show', 'tbody tr:first-child');
$I->expectTo('See section details');
$I->seeCurrentUrlEquals('/sections/' . $sections->first()->id);
$I->see($sections->first()->name, 'h1');