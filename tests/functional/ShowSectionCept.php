<?php

$I = new FunctionalTester($scenario);
$I->am('a CMS Admin');
$I->wantTo('Ver detalles de la seccion');


// Metodo personalizado para haveRecord
// tests\_support\FunctionalHelper.php
$I->haveSection();


// And
$I->amOnPage('sections/1');
//$I->seeCurrentUrlEquals('/sections/1');


// Then
$I->expectTo('Ver detalles de la seccion');
$I->see('MielCanela, C.A', 'h1');
$I->see('http://mielcanela.com.ve', '.slug_url');
$I->see('HTML5, CSS3, Bootstrap, Jquery', '.type');
$I->see('Activa', '.status');