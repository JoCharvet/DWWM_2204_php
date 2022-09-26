<?php 

    $a=23;
    $b=17;
    $i;
    $s;

    if($b<=$a)
    {
        echo "$b < $a".PHP_EOL;
        $i=$b;
        $s=$a;
    }
    else 
    {
        echo "$a < $b".PHP_EOL;
        $i=$a;
        $s=$b;
    }
    
    for ($i=$i;$i <= $s;$i++)
    {
        echo $i.PHP_EOL;
    }

    
?>

