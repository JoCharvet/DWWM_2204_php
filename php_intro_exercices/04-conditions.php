<?php 

////////////////////////////////// EXO 4.A ////////////////////////////////

// Créer une fonction « isMajor() » acceptant un argument de type int. Elle devra retourner un booléen. 
// Si l’âge est supérieur ou égal à 18, elle doit retourner true. Sinon elle doit retourner false.


/**
 * 
 * return a boolean true if the persone are major
 * 
 * @param int $_age age of an person
 * @return bool true if >= 18
 * @example isMajor(22) ==> return true
 * @author Charvet Johnny <charvetjohnny@outlook.fr>
 */
function isMajor(int $_age):bool
{
    return $_age >=18 ? true : false;
}
//  $age= (int)readLine('Veuillez saisir votre age ');
//  echo isMajor($age);

////////////////////////////////// EXO 4.B ////////////////////////////////

// Créer une fonction « getRetired() » acceptant un argument de type int. Elle devra retourner un string. 
// Cette fonction permet de calculer le nombre d’années restant avant la retraite ou le nombre d’années depuis la retraite. 
// Pour cet exercice, l’âge de la retraite est fixé à 60 ans.

/**
 * 
 * Return an adapted sentence for your retired period in function the age of an person
 * 
 * @param int $_age the age of the person
 * @return string a sentence
 * @example getRetired(60) ==> return  'Vous êtes à la retraite cete année.'
 * @author Charvet Johnny <charvetjohnny@outlook.fr>
 */
function getRetired(int $_age):string
{
    switch ($_age)
    {
        case ($_age<0):
            return 'Vous n\'êtes pas née.'.PHP_EOL;
            break;

        case ($_age==60):
            return 'Vous êtes à la retraite cete année.'.PHP_EOL;
            break;
        
        case($_age<60):
            $result = 60-$_age;
            return "il vous reste $result ans avant la retraite.".PHP_EOL;
            break;

        case($_age>60):
            $result = $_age-60;
            return "Vous êtes a la retraite depuis $result ans".PHP_EOL;
            break;

        default:
            return 'erreur'.PHP_EOL;
            break;
    }
}
//echo getRetired(69);

////////////////////////////////// EXO 4.C ////////////////////////////////

// Créer une fonction « getMax() » acceptant 3 arguments de type float.
// Cette fonction doit retourner la valeur du plus grand des 3 nombres. Limitez le résultat à 3 décimales
// Si au moins 2 des valeurs fournies sont égales la fonction retourne 0.


/**
 * 
 * Return the maximum value of three floats
 * 
 * @param float $_a, first value
 * @param float $_b, second value
 * @param float $_c, third value
 * @return float the float with the biggest value of param
 * @example getMax(12.3,72.4,8.8)    => return 72.4
 * @author Charvet Johnny <charvetjohnny@outlook.fr>
 */
function getMax(float $_a,float $_b, float $_c):float
{
    $result=0;
    if($_a === $_b || $_a === $_c || $_b === $_c)
    {
        $result=0.0;
    }
    else if ($_a > $_b && $_a > $_c )
    {
        $result= $_a;
    }
    else if($_b > $_a && $_b > $_c )
    {
        $result=$_b;
    }
    else
    {
        $result=$_c;
    }

    return $result;

}
//echo getMax(12.3,72.4,8.8);

////////////////////////////////// EXO 4.D ////////////////////////////////

// Créez une fonction « capitalCity() » qui accepte un argument de type string (le pays dont on cherche la capitale). 
// Elle devra retourner le nom de la capitale des pays suivants :
// France => Paris
// Allemagne => Berlin
// Italie => Rome
// Maroc => Rabat
// Espagne => Madrid
// Portugal => Lisbonne
// Angleterre => Londres
// Si le pays ne fait pas partie de la liste ci-dessus, la fonction retourne la valeur « Capitale inconnue ».
// Note : Utilisez la structure SWITCH pour faire cet exercice.




/**
 * 
 * Return the capital city name of one country
 *
 * @param string $_country the name of the country you want display the capital city name
 * @return string the capital city name
 * @example capitalCity('France')      => return 'Paris'
 * @author Charvet Johnny <charvetjohnny@outlook.fr>
 */
function capitalCity(string $_country):string
{
    $cap='';

    switch($_country)
    {
        case 'France':
            $cap='Paris'.PHP_EOL;
            break;
        case 'Allemagne':
            $cap='Berlin'.PHP_EOL;
            break;
        case 'Italie':
            $cap='Rome'.PHP_EOL;
            break;
        case 'Maroc':
            $cap='Rabat'.PHP_EOL;
            break;
        case 'Espagne';
            $cap='Portugal'.PHP_EOL;
            break;
        case 'Portugal':
            $cap='Lisbonne'.PHP_EOL;
            break;
        case 'Angleterre':
            $cap='Londres'.PHP_EOL;
            break;
        default:
            $cap='Capitale inconnue'.PHP_EOL;
            break;
    }

    return $cap;
}
//echo capitalCity('France');

?>