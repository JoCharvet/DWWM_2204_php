<?php 

////////////////////////////////// EXO 3.A ////////////////////////////////

// Créer une fonction « getMC2() ». 
// Cette fonction doit retourner Le nom de l’inventeur de la formule « E = MC² ».

/**
 * 
 * Return the name of the inventor of the formula E=MC2
 * 
 * @return string 'Enstein'
 * @example echo getMC2()         => return 'Enstein'
 * @author Charvet Johnny <charvetjohnny@outlook.fr>
 */
function getMC2():string
{
    return "Enstein";
}
// echo getMC2();

////////////////////////////////// EXO 3.B ////////////////////////////////

// Créer une fonction « getUserName() » qui accepte deux arguments (prénom et nom) de type string. 
// Cette fonction doit retourner la concaténation des deux valeurs. 

/**
 * 
 * Return the first name and the last name 
 * 
 * @param  string $_firstName, the first name you wan't display
 * @param  string $_lastName, the last name you wan't display
 * @return string the last name and the first name
 * @example getUserName('Johnny', 'Charvet')   => return 'JohnnyCharvet'
 * @author Charvet Johnny <charvetjohnny@outlook.fr>
 */
function getUserName(string $_firstName, string $_lastName):string
{
    return $_firstName.$_lastName;
}
// echo getUserName('Johnny', 'Charvet');

////////////////////////////////// EXO 3.C ////////////////////////////////

// Créer une fonction « getFullName() » acceptant deux arguments (nom et prénom) de type string. 
// Cette fonction doit retourner la concaténation des deux valeurs avec un espace entre les 2, le prénom en minuscule et le nom
// en MAJUSCULE

/**
 * 
 * Return the first name to the lower case and the last name to the upper case with a space between
 * 
 * @param string $_firstName the first name
 * @param string $_lastName the last name
 * @return string the first name to the lower case and the last name to the upper case with a space between
 * @example getFullName('Johnny', 'Charvet')     => return 'Johnny CHARVET'
 * @author Charvet Johnny <charvetjohnny@outlook.fr>
 */
function getFullName( string $_firstName, string $_lastName):string
{
    return strtolower($_firstName). ' ' .strtoupper($_lastName);
}
// echo getFullName('Johnny', 'Charvet');

////////////////////////////////// EXO 3.D ////////////////////////////////

// Créer une fonction « askUser() » acceptant deux arguments (nom et prénom) de type string. 
// Cette fonction doit retourner une chaîne de caractères sous la forme :
// « Bonjour prénom, nom. Connaissez-vous Einstein ? »
// Cette fonction doit réutiliser les fonctions
// - « getFullName() » pour obtenir la concaténation des deux valeurs.
// - « getMC2() » pour obtenir le nom de l'inventeur de la formule E = MC².


/**
 * 
 * Ask to the User by his first and last name if he know Enstein
 * @param string $_firstName the first name
 * @param string $_lastName the last name
 * @return string the getFullName() by parameters and ask if he know the getMC2()
 * @example askUSer('Johnny', 'Charvet')     => return ' Bonjour Johnny CHARVET, connaissez-vous Enstein ?'
 * @author Charvet Johnny <charvetjohnny@outlook.fr>
 */
function askUser( string $_firstName, string $_lastName): string
{

    return 'Bonjour ' . getFullName($_firstName,$_lastName) . ', connaissez-vous '. getMC2() . ' ?'.PHP_EOL ;
}
//echo askUSer('Johnny', 'Charvet');

?>