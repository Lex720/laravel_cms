<?php

$I = new FunctionalTester($scenario);
$I->am('a CMS Admin');
$I->wantTo('Actualizar una seccion');


// Metodo personalizado para haveRecord
// tests\_support\FunctionalHelper.php
$I->haveSection();

// And
$I->amOnPage('sections/1');
$I->see('Editar', '.btn-edit');


$I->amGoingTo('Editar la seccion');
// When
$I->click('Editar');
// Then
$I->seeCurrentUrlEquals('/sections/1/edit');
// And
$I->see('Editar "MielCanela, C.A"', 'h1');
$I->seeInField('name', 'MielCanela, C.A');
$I->seeInField('slug_url', 'http://mielcanela.com.ve');
$I->seeInField('type', 'HTML5, CSS3, Bootstrap, Jquery');
$I->seeOptionIsSelected('status', '1');


$I->amGoingTo('Enviar un formulario invalido');
// When 
$I->fillField('name', '');
// And
$I->click('Actualizar');
// Then
$I->expectTo('Ver la planilla de nuevo con los errores');
$I->seeCurrentUrlEquals('/sections/1/edit');
$I->seeInField('name', '');
$I->see('The name field is required', '.error');


$I->amGoingTo('Enviar un formulario valido');
// When 
$I->fillField('Nombre', 'MielCanela1');
$I->selectOption('status', 0);
// And
$I->click('Actualizar');
// Then
$I->expectTo('Ver la seccion de detalles con los nuevos cambios');
$I->seeCurrentUrlEquals('/sections/1');
$I->see('MielCanela1', 'h1');
$I->seeRecord('sections', [
	'id' => 1,
	// changed
	'name' => 'MielCanela1',
	'status' => 0,
	// same
	'slug_url' => 'http://mielcanela.com.ve',
	'type' => 'HTML5, CSS3, Bootstrap, Jquery'
]);