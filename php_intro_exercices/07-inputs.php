<?php 

////////////////////////////////// EXO 7.A ////////////////////////////////

// Créez une fonction « stringLength() » qui accepte un argument de type string et retourne un booléen qui vaut true si la chaine de 
// caractères contient au moins 9 caractères et false si elle contient moins de 9 caractères

//$str ='12345678';

/**
 * 
 * Used for veifying one string contains more than eight characters
 *
 * @param string $_str the string to check
 * @return boolean the result of the check
 * @example echo stringLength('123456789')   ==> return true
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
function stringLength(string $_str):bool
{
    return (strlen($_str)>8)? true:false;
}
//echo stringLength($str);

////////////////////////////////// EXO 7.B ////////////////////////////////

// Créez une fonction « passwordCheck() » acceptant un argument de type string. 
// Cette fonction retourne un booléen qui vaut true si le mot de passe respecte les règles suivantes :
// - Contient au moins 9 caractères
// - Contient au moins 1 chiffre
// - Contient au moins une majuscule et une minuscule
// - Contient au moins 1 caractère non alphanumérique
// Pour cet exercice, vous devez réutiliser la fonction « stringLength () » créée dans l’exercice précédent.

/**
 * 
 * Used for know if the parameter is conform of all restriction
 * 
 * @param string $_pass the string to check 
 * @return boolean true if the test pass
 * @example (passwordCheck($pass)) ? do that : do other ;
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
function passwordCheck(string $_pass):bool
{
    return (stringLength($_pass))? ((preg_match('@[A-Z]@', $_pass) && preg_match('@[a-z]@', $_pass) && preg_match('@[0-9]@', $_pass) && preg_match('@(^[A-Za-z0-9])@',$_pass)) ? true :false):false;
}
//$pass = 'apoLma6zdad*';
//echo passwordCheck($pass);

////////////////////////////////// EXO 7.C ////////////////////////////////

// Vous devez créer une fonction pour permettre l'identification d'un utilisateur.
// Pour cet exercice, les mots de passe ne sont pas chiffrés.
// Soit le tableau d'utilisateurs suivant (récupéré depuis une base de données) :
// $users = [
//  'joe' => 'Azer1234!', 
//  'jack' => 'Azer-4321', 
//  'admin' => '1234_Azer',
// ];
// Créez une fonction « userLogin() » acceptant 3 arguments :
// 1) le nom d'utilisateur (string). 
// 2) le mot de passe à tester (string).
// 3) le tableau d'utilisateurs où effectuer la recherche (array).
// Cette fonction retourne un booléen qui vaut true si l'utilisateur a été trouvé et que les mots de passe correspondent. 
// La fonction retourne false dans le cas contraire (utilisateur non trouvé OU mot de passe invalide).
// Pour cet exercice, vous devez réutiliser les fonctions créées dans les exercices précédents

/** @var array $users  */
// $users = [
//  'joe' => 'Azer1234!', 
//  'jack' => 'Azer-4321', 
//  'admin' => '1234_Azer',
// ];

/**
 * 
 * used for check if the username and password are valid and in the array
 *
 * @param string $_userLog user login to compare
 * @param string $_userPass user password to compare
 * @param array $_tab the array key login value password
 * @return boolean true if test pass
 * @example (userLogin('joe','Azer1234!',$tab )) ? 'Connexion réussie': 'Erreur';    ==> return 'Connexion réussie'
 * @author Johnny Charvet <charvetjohnny@outlook.fr> 
 */
function userLogin(string $_userLog , string $_userPass, array $_tab):bool
{
   return (key_exists($_userLog,$_tab)) ? ((passwordCheck($_userPass))? (($_userPass===$_tab[$_userLog]) ? true:false):false):false;  
}
//echo (userLogin('joe','Azer1234!',$users )) ? 'Connexion réussie': 'Erreur';


?>