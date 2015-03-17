<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('paginar los proyectos');


$I->amGoingTo('Ir a la pagina 1');
// When
$sections = $I->haveSections(16);
// And
$I->amOnPage('/sections');
// Then
$I->see('Existen 16 proyectos, mostrando pagina 1 de 2');
$I->expectTo('ver la primera seccion');
$I->see($sections->first()->name, 'tbody tr:first-child td.name');
$I->expect('no ver la ultima seccion');
$I->dontSee($sections->last()->name);
$I->expectTo('ver el link a la pagina 2');
$I->see('2', '.pagination a');


$I->amGoingTo('Ir a la pagina 2');
// When
$I->click('2', '.pagination a');
// Then
$I->expectTo('Ver los parametros de la paginacion en la URL');
$I->seeCurrentUrlEquals('/sections?page=2');
$I->expect('no ver la primera seccion');
$I->dontSee($sections->first()->name);
$I->expectTo('ver la ultima seccion');
$I->see($sections->last()->name);
$I->expectTo('Ver la seccion 15 como primer item de la pagina 2');
$I->see($sections->get(15)->name, 'tbody tr:first-child td.name');


$I->amGoingTo('Volver a la pagina 1');
// When
$I->amOnPage('/sections?page=2');
$I->see('1', '.pagination a');
// And
$I->click('1', '.pagination a');
// Then
$I->seeCurrentUrlEquals('/sections?page=1');