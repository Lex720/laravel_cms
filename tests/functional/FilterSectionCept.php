<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('filtrar la lista de secciones');


// Metodos personalizados para haveRecord - tests\_support\FunctionalHelper.php
$I->haveSection(); //Created "Our company" section
$sections = $I->haveSections(); //Created random sections
// And
$I->amOnPage('sections');
// Then
$I->seeElement('input', ['name' => 'name']);


// When 
$I->fillField('name', 'mielcanela');
$I->selectOption('status', '0');
// And
$I->click('Filtrar');


// Then
$I->seeCurrentUrlEquals('/sections?name=mielcanela&status=0');
$I->expectTo('No encontrar resultados');
// Then
$I->see('Existen 0 proyectos');
$I->dontSee('MielCanela, C.A', 'td.name');
$I->seeInField('name', 'mielcanela');


// When
$I->seeOptionIsSelected('status', 'Inactiva');
$I->selectOption('status', '1');
// And
$I->click('Filtrar');
// Then
$I->see('MielCanela, C.A', 'td.name');
$I->dontSee($sections->first()->name, 'td.name');
$I->dontSee($sections->last()->name, 'td.name');