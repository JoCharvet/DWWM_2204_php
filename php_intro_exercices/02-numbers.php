<?php


//////////////////////////////// EXO 2.A ////////////////////////////////

// Créer une fonction « getSum() » qui accepte deux arguments de type int. Elle devra retourner la somme des deux valeurs.

/** 
*
* Return the sum of all numbers in parameters,
*
* @return: int : the sum
* @param : int[] : the numbers to add
* @example getSum(45, 23, 12)  
* @author: Johnny Charvet<charvetjohnny@outlook.fr>
*/
function getSum(int ...$_num): int 
{
    $result=0;
    foreach ($_num as $n) 
    {
        $result+=$n;
    }
    return $result;
}

// echo getSum(10,12,10,10,10,25,32,10);

//////////////////////////////// EXO 2.B ////////////////////////////////

// Créer une fonction « getSub() » qui accepte deux arguments de type int. Elle devra retourner la soustraction des deux valeurs.

/** 
*
* take a base float and sub all number to him
*
* @param float $_num : the base float to decrease 
* @param float[] $_numtoSub : all number you want sub to the base
* @return float $result the base sub by parameters
* @example getSub(45.6, 23, 12.4)
* @author: Johnny Charvet<charvetjohnny@outlook.fr>
*/ 
function getSub(float $_num, float ...$_numToSub):float
{
    
    foreach($_numToSub as $n){
        $_num-=$n;
    }

    return $_num;
}

// echo getSub(100,3.7,45,22.3);

//////////////////////////////// EXO 2.C ////////////////////////////////

// Créer une fonction getMulti() qui accepte deux arguments de type float. Elle devra retourner la multiplication des deux valeurs. 
// Limitez le résultat à 2 décimales.

/** 
*
* Returns the result of multiplying the parameters
*
* @param float $_num : the base float you want to multiply
* @param float $_num2 : the number you want multiplying to the base
* @return float the result of the multiplication
* @example getMulti(45.6,2)
* @author: Johnny Charvet<charvetjohnny@outlook.fr>
*/
function getMulti(float $num, float $num2):float
{
    return number_format(($num*$num2),2);
}
// echo getMulti(45.6,2);

//////////////////////////////// EXO 2.D ////////////////////////////////

// Créer une fonction getDiv() qui accepte deux arguments de type int. Elle devra retourner la division des deux valeurs.
// Limitez le résultat à 2 décimales. 
// Rappel : une division par zéro est impossible. Dans ce cas, retourner la valeur « 0 ».

/**
 * 
 * Return the result of dividing parameters
 * 
 * @param int $num : the base int you want to split
 * @param int $num : the divider
 * @return float the result of the split
 * @example getDiv(7,5)
 * @author: Johnny Charvet<charvetjohnny@outlook.fr>
 */
function getDiv(int $num,int $num2):float
{
    if($num !== 0 && $num2 !==0)
    {
        return number_format(($num/$num2),2);
    }
    else 
    {
        return 0;
    }
    
}
echo getDiv(75,86);


?>