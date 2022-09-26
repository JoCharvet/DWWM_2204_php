<?php

declare(strict_types=1);
////////////////////////////////// EXO 5.A ////////////////////////////////

//Créer une fonction « getToday() ». Cette fonction doit afficher et retourner la date du jour au format d/m/Y sous forme de 
//chaine de caractères (exemple : 21/10/2020)

/**
 * Return the Date at the moment format d/m/yy
 *
 * @return string the date
 * @example echo getToday() the date of today
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
function getToday() :string
{
    return date_format(new DateTime(),'d/m/yy').PHP_EOL;
}
//echo getToday();

////////////////////////////////// EXO 5.B ////////////////////////////////

// Créer une fonction « getTimeLeft() » acceptant un argument de type string et qui retourne une chaine de caractère.
// La valeur de l'argument représente une date au format Y-m-d (ex: 2020-11-23). 
// La fonction doit vérifier si la date fournie est valide (bon format, date cohérente).
// Si la date est ultérieure à la date du jour, la fonction retourne la différence en années/mois/jours.
// Si la date est égale à la date du jour, la fonction retourne « Aujourd'hui ».
// Si la date est antérieur à la date du jour, la fonction retourne « Évènement passé ».

/**
 * 
 * Used for return the time before the date in parameter
 *
 * @param string the date you want to have the time left
 * @return string the time before the date in parameter
 * @example echo getTimeLeft('2022-09-02')   ===> return  'Dans 2 mois et 9 jours.'
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
function getTimeLeft(string $_date) :string 
{

    /** @var DateTime  format DateTime of the $_date*/
    $date = new DateTime($_date);
    /** @var DateTime date of the day */
    $today = new DateTime();
    /** @var DateInterval difference between */
    $interval = $today->diff($date);
    /** @var String used for display the result*/
    $res='';
    /** @var String stock the year of the interval */
    $day_int=$interval->format('%d');
    /** @var String stock the month of the interval */
    $month_int=$interval->format('%m');
    /** @var String stock the day of the interval */
    $year_int= $interval->format('%y');
   


    if(checkdate((int)$date->format("d"),(int)$date->format("m"),(int)$date->format("y"))) {
        if($today->format('ymd')>$date->format('ymd')) {
            $res .='Evènement passé'.PHP_EOL;
        }
        else if($today<$date) {

            if($year_int!=='0' ) {
                $res = 'dans ' . $year_int . ' an' . multipleOrNot($year_int);
                if($month_int!=='0') {   
                    if($day_int!=='0') {
                        $res.= ', ' . $month_int . ' et ' . $day_int . multipleOrNot($day_int). '.' ;
                    }
                    else {
                        $res.= ' et ' . $month_int . ' mois .';
                    }           
                }
                else if($day_int!=='0') {
                    $res.= ' et ' . $day_int .' jour'. multipleOrNot($day_int). '.';
                }
                else {
                    $res.= ' .';
                }
            }
            else {
                if($month_int!=='0') {
                    $res = 'Dans ' . $month_int . ' mois';
                    if($day_int!=='0') {
                        $res .= ' et ' . $day_int . ' jour' .multipleOrNot($day_int). '.' ;
                    }
                    else {
                        $res.= ' .';
                    }
                }
                else {
                    $res = 'Dans ' . $day_int . ' jour' . multipleOrNot($day_int) . '.';
                }
            }
        }
        else {
            $res.='Aujourd\'hui'.PHP_EOL;
        }
    }
    else {
        $res .= 'Date invalide'.PHP_EOL;
    }
    return $res;
}

/**
 * 
 * Add 's' if the value are over one
 *
 * @param string $_val number to compare
 * @return string display the result
 * @example echo 'Jour' .multipleOrNot($day_int). '.'
 * @author Johnny Charvet <charvetjohnny@outlook.fr> 
 */
function multipleOrNot(string $_val):string
{
        $_val = intval($_val);
        return ($_val >1)? 's': '';
    
}
echo getTimeLeft('2022-09-02');
?>

