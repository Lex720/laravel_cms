<?php

$I = new FunctionalTester($scenario);
$I->am('a CMS Admin');
$I->wantTo('Listar secciones');


// Metodo personalizado para haveRecord
// tests\_support\FunctionalHelper.php
$sections = $I->haveSections();
// And
$I->amOnPage('sections');
// Then
$I->see('Secciones', 'h1');
$I->see('Existen 10 proyectos');
$I->see($sections->first()->name, 'tbody tr:first-child td.name');
$I->see($sections->last()->name, 'tbody tr:last-child td.name');


// When 
$I->click('Mostrar', 'tbody tr:first-child');
$I->expectTo('Ver los detalles de la seccion');
$I->seeCurrentUrlEquals('/sections/' . $sections->first()->id);
$I->see($sections->first()->name, 'h1');


// Then
$I->click('Regresar', '.back');
$I->amOnPage('sections');
// When 
$I->click('Editar', 'tbody tr:first-child');
$I->expectTo('Ver la seccionde editar');
$I->seeCurrentUrlEquals('/sections/' . $sections->first()->id . '/edit');
$I->see('Editar "' . $sections->first()->name. '"', 'h1');
$I->seeInField('slug_url', $sections->first()->slug_url);