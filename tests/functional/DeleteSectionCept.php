<?php

$I = new FunctionalTester($scenario);
$I->am('a CMS Admin');
$I->wantTo('eliminar una seccion');


// Metodo personalizado para haveRecord
// tests\_support\FunctionalHelper.php
$I->haveSection();


// And
$I->amOnPage('sections/1');
// Then
$I->see('Eliminar', '.btn-del');


$I->amGoingTo('Eliminar una seccion');
// When
$I->click('Eliminar');
// Then
$I->seeCurrentUrlEquals('/sections');
$I->dontSeeRecord('sections', [
	'id' => 1,
]);