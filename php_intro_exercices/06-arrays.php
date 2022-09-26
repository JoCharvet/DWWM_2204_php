<?php

////////////////////////////////// EXO 6.A ////////////////////////////////

// Créer une fonction « firstItem() » qui accepte un argument de type array. Elle devra retourner le premier élément du tableau. Si 
// le tableau est vide, la fonction retourne null.

$tab = [ 'Joe','Zoé', 'Néo', 'Léa','Jack'];

/**
 * 
 * Used for return the first element of an array
 *
 * @param [type] $_tab
 * @return string the first element
 * @example echo firstItem($tab)   ==> return 'Joe'
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
function firstItem(array $_tab):string
{

    return (!empty($_tab)) ?   $_tab[0].PHP_EOL : null ;
}

//echo firstItem($tab);     

////////////////////////////////// EXO 6.B ////////////////////////////////

// Créer une fonction « lastItem() » acceptant un argument de type array. Elle devra retourner le dernier élément du tableau. Si le 
// tableau est vide, il faudra retourner null.

/**
 * 
 * Used for return the last element of an array
 *
 * @param [type] $_tab
 * @return string the last element
 * @example echo lastItem($tab)   ==> return 'Jack'
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
function lastItem(array $_tab):string
{
    return  (!empty($_tab)) ?  end($_tab) .PHP_EOL : null;
}
//echo lastItem($tab);

////////////////////////////////// EXO 6.C ////////////////////////////////

// Créer une fonction « sortItems() » acceptant un argument de type array. 
// Cette fonction retourne le tableau trié par ordre décroissant. Si le tableau est vide, il faudra retourner un tableau vide.
//asort($tab);
//print_r($tab);

/**
 *
 * Used for sort an array by descending
 *
 * @param array $_tab the array to sort
 * @return array the array sorted
 * @example print_r(sortItems($tab));
 * @author Johnny Charvet <charvetjohnny@outlook.fr> 
 */
function sortItems(array $_tab):array
{   
    return (arsort($_tab))  ? $_tab : $_tab;
}
//print_r(sortItems($tab));

////////////////////////////////// EXO 6.D ////////////////////////////////

// Créer une fonction « stringItems() » acceptant un argument de type array. 
// Cette fonction retourne une chaine de caractère contenant tous les éléments du tableau triés en ordre croissant et séparés par 
// une virgule et un espace. Si le tableau est vide, il faudra retourner la valeur « Nothing to display ».

/**
 *
 * Used for transform an array in string
 *
 * @param array $_tab the array to transform
 * @return string the array transformed in string
 * @example echo stringItems($tab));
 * @author Johnny Charvet <charvetjohnny@outlook.fr> 
 */
function stringItems(array $_tab):string
{
    return (!empty($_tab)) ? implode(' ',$_tab) : 'Nothing to display';
}
echo stringItems($tab);