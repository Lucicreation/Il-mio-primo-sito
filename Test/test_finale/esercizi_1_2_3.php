<?php
//1.Stampare i numeri pari da 1 a 10
echo "Numeri pari fino a 10:"."<br>";
for($i=2; $i<=10; $i+=2) {
    echo $i." ";
}
echo "<br>"."<br>";

//2.Creare un codice per stampare la tabellina del 5
echo "Tabellina del 5: <br>";
$a=5;
for ($b=1; $b<=10; $b++) {
echo $a*$b." ";
}
echo "<br>"."<br>";

//3.Creare un form di login e verificare che i dati inseriti siano compatibili con gli stessi dati inseriti in array
$users = [
    'utente1' => 'password1',
    'utente2' => 'password2',
    'utente3' => 'password3'
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($users[$username]) && $users[$username] == $password) {
        echo "Login effettuato con successo!";
    } else {
        echo "Nome utente o password errati.";
    }
} else {

    ?>

    <h2>Login</h2>

    <form method="post" action="">
        <label for="username">Nome utente:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Accedi">
    </form>

   <?php
}

?>
