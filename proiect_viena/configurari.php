<?php
// Liniile astea două obligă PHP să zică ce eroare are
error_reporting(E_ALL);
ini_set('display_errors', 1);

$server = "localhost";
$user = "root";
$parola = "";
$baza_date = "viena";

$conexiune = mysqli_connect($server, $user, $parola, $baza_date);

if (!$conexiune) {
    die("Eroare gravă de conexiune: " . mysqli_connect_error());
}

// Dacă vezi mesajul ăsta când accesezi index.php, conexiunea e bună!
// echo "Conexiunea la baza de date functioneaza!"; 
?>