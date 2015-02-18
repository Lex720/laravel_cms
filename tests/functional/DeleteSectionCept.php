<?php

$I = new FunctionalTester($scenario);
$I->am('a CMS Admin');
$I->wantTo('delete a section');


// Metodo personalizado para haveRecord
// tests\_support\FunctionalHelper.php
$I->haveSection();


// And
$I->amOnPage('sections/1');
// Then
$I->see('Delete section', '.btn-del');


$I->amGoingTo('Delete a section');
// When
$I->click('Delete section');
// Then
$I->seeCurrentUrlEquals('/sections');
$I->dontSeeRecord('sections', [
	'id' => 1,
]);