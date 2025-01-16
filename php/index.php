<?php
//definizioni variabili
$nome = "Lucia";
$cognome = "Fina";
$età = 34;

echo "Mi chiamo ".$nome." ".$cognome." e ho ".$età." anni.";

//prova ciclo if
if ($età>=18){
    echo "<h2>Sei maggiorenne!</h2>";
    } else {
        echo "<h2>Sei minorenne!</h2>";
    }
    
//prova ciclo while
$count = 5;
while ($count>0){
    echo "Conto alla rovescia: " .$count."<br>";
    $count--;
    } 

    //ciclo for
    echo "ciclo for <br>";
    for ($i=1;$i<=5;$i++){
        echo "Numero : ".$i."<br>";
    }

    //ciclo foreach con array
    echo "ciclo foreach <br>";
    $frutti = ["Mela","Banana"]