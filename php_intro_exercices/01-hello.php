<?php

/**
* Affiche "Hello World !"
*/
function helloWorld(): void
{
    echo "Hello World \n";
} 

$prenom = "";

/**
* Retourne "Hello $name !"
* @param string $name le nom à afficher
*/
function hello(string $name): string
{
    if($name!=="")
    {
        return "Hello $name \n";
    }
    return "Hello Nobody! \n";      
}


echo hello($prenom);

helloWorld();
?>