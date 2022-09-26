<?php 

require './Autoloader.php';

Autoloader::register();

//------------------ABEILLE

// /** @var Abeille */
// $abeille =  new Abeille();
// $abeille->move();
// $abeille->eat('Nectar');
// $abeille->shout();
// $abeille->eat('huile moteur');

// ---------------LABRADOR

$labrador = new Labrador('Médor');
echo $labrador->getName();
$labrador->move();
$labrador->move();
$labrador->move();
$labrador->eat('patée');
$labrador->eat('croquettes');
$labrador->shout();

//---------------PINSCHER

// $pinscher= new Pinscher('lucky');
// $pinscher->move();

//---------------- CHEVAL

// $dada= new Cheval();
// $dada->eat('foin');
// $dada->eat('feuille');
// $dada->eat('herbe');
// $dada->shout();

//-------------- GIRAFE

// $gigi = new Girafe();
// $gigi->eat('feuille');
// $gigi->eat('caillou');
// $gigi->shout();
// $gigi->move();

