<?php
//Creare un body conterrà un table che mostrerà i valori prelevati da un array
include 'header.php';
?>

<div>
<?php
// Array di dati dell'utente
$utente = ["luigi@email.it", "abcdef", "Luigi", "Bianchi"];

// Verifica se l'array contiene dati
if (!empty($utente)) {
    echo "<h3>Dati dell'utente:</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Email</th><th>Nome</th><th>Cognome</th></tr>";
    echo "<tr>";
    echo "<td>" . $utente[0] . "</td>"; // Email
    echo "<td>" . $utente[2] . "</td>"; // Nome
    echo "<td>" . $utente[3] . "</td>"; // Cognome
    echo "</tr>";
    echo "</table>";
} else {
    echo "<p>Dato non trovato.</p>";
}
?>
</div>

<?php
include 'footer.php';
?>