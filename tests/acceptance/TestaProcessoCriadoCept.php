<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Criação de Processos Pela Portaria');

$I->amOnPage('/codigo');
$I->see('PRODÍGIO');

$I->seeCheckboxIsChecked('processo', 'PED');
$I->see('Abrir Solicitação');
$I->click('form input[type=submit]');