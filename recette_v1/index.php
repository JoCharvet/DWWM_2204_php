<?php 

require __DIR__.'./Ingredient.php';

/** @var Ustensile */
$cuillere = new Ustensile('cuillere');
/** @var Ustensile */
$louche = new Ustensile('louche');
/** @var Ustensile */
$tasse = new Ustensile('tasse');
/** @var Ingredient */
$cafe = new Ingredient('cafe','gramme');

$cafe->addUstensile($cuillere);
$cafe->displayUstensile();

echo '<pre>';
echo var_export($cafe,true);