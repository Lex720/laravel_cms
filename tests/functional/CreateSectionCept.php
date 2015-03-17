<?php 

$I = new FunctionalTester($scenario);
$I->am('a CMS Admin');
$I->wantTo('crear una nueva seccion');


// When
$I->amOnPage('sections');
// And
$I->click('Agregar nueva seccion');


// Then
$I->seeCurrentUrlEquals('/sections/create');
$I->see('Nueva seccion', 'h1');


$I->amGoingTo('Omitir el campo nombre para enviar un formulario invalido');
// When
$I->fillField('URL', 'our-company');
$I->click('Crear seccion');
// Then
$I->expectTo('Ver la planilla de nuevo con los errores');
$I->seeCurrentUrlEquals('/sections/create');
$I->seeInField('URL', 'our-company');
$I->see('The name field is required', '.error');


$I->amGoingTo('Enviar un formulario valido');
// When
$I->fillField('Nombre', 'Our company');
$I->fillField('URL', 'our-company');
$I->fillField('type', 'HTML5');
$I->selectOption('status', 1);
// And
$I->click('Crear seccion');


// Then
$I->seeCurrentUrlEquals('/sections/1');
$I->see('Our company', 'h1');
// And
$I->seeRecord('sections', [
	'name' => 'Our company',
	'slug_url' => 'our-company',
	'type' => 'HTML5',
	'status' => 1
]);