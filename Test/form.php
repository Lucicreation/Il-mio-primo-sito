<?php
var_dump ($_POST);

foreach ($_POST as $campo)
if($campo=="")
echo "Campo richiesto";

echo "<br> Il nome è ".$_POST['nome']."e il cognome è ".$_POST['cognome'];

?>
