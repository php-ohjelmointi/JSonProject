<?php 
    $drinks =  json_decode(file_get_contents('drinks.json'));
    // print_r($drinks);

    foreach($drinks as $drink){
        echo '<li>'.$drink->Drink_Ean.' - '.$drink->Drink_name.'</li>';
    }

?>