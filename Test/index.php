<?php
//Definizioni variabili
$nome = "Lucia";
$cognome = "Fina";
$età = 34;

echo "Mi chiamo ".$nome." ".$cognome." e ho ".$età." anni.";

//Prova ciclo if
if ($età>=18){
    echo "<h2>Sei maggiorenne!</h2>";
    } else {
        echo "<h2>Sei minorenne!</h2>";
    }
    
//Prova ciclo while
$count = 5;
while ($count>0){
    echo "Conto alla rovescia: " .$count."<br>";
    $count--;
    } 

//Ciclo for
echo "ciclo for <br>";
for ($i=1;$i<=5;$i++){
        echo "Numero : ".$i."<br>";
    }

//Ciclo foreach con array
echo "<h2>Ciclo foreach</h2>";
$frutti = ["Mela","Banana","Ananas","Pera"];
echo "Ho fatto un frullato con:<br>";
foreach($frutti as $frutto) {
    echo $frutto."<br>";  
    }

//Tabelline
for ($a=1; $a<=10; $a++) {
    echo "<tr>";
    for ($b=1;$b<=10;$b++) {
    echo $a*$b." ";
} echo "<br>";
} 

//Tabellina del 5 con solo numeri pari
echo "Tabellina del 5 con solo numeri pari: <br>";
$a=5;
for ($b=1; $b<=10; $b++) {
    if ($a*$b%2==0) {
        echo $a*$b." ";
    }
}

//Tabellina del 5 con numeri pari (2)
echo "Tabellina del 5 con solo numeri pari(2): <br>";
$a=5;
for ($b=2; $b<=10; $b=$b+2) {
echo $a*$b." ";
}

//funzione con argomenti
function somma ($a,$b) {
    return $a+$b;
}
$result = somma(13,27);
echo "<h2>Il risultato è : <h2>".$result."!<br>";

//funzione con parametri opzionali
function elevazione_a_potenza ($a,$b=2) {
    return $a**$b;
}
echo "Elevazione a potenza: ".elevazione_a_potenza(3)."<br>";

echo "Elevazione a potenza: ".elevazione_a_potenza(5,4). "<br>";

//funzione con argomenti 2
function differenza ($x,$y) {
       return $x-$y;
}
$result = differenza (27,13);
echo "La differenza è: ".$result."<br>";