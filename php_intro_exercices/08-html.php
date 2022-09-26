<?php 

require_once('07-inputs.php');

$List =['Joe','Jack','Léa','Zoé','Néo'];

function htmlList(string $_list_name,array $_list):string
{
    $result= "<h3> $_list_name </h3> \n <br> <ul>";
    foreach($_list as $list_elem){
        $result.= "<li> $list_elem </li> \n <br>";

    }
    $result.= '</ul>';
    return $result;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= htmlList('liste de noms',$List)  ?>
</body>
</html>