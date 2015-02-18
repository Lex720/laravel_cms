<?php

$I = new FunctionalTester($scenario);
$I->am('a CMS Admin');
$I->wantTo('See section details');


// Metodo personalizado para haveRecord
// tests\_support\FunctionalHelper.php
$I->haveSection();


// And
$I->amOnPage('sections/1');
//$I->seeCurrentUrlEquals('/sections/1');


// Then
$I->expectTo('See section details');
$I->see('Our company', 'h1');
$I->see('our-company', '.slug_url');
$I->see('page', '.type');
$I->see('Show in menu', '.menu');
$I->see('2', '.menu_order');
$I->see('Draft', '.published');