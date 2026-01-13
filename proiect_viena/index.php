<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'configurari.php'; 

echo "<h1>Test Proiect Viena</h1>";

$interogare = "SELECT * FROM obiective";
$rezultat = mysqli_query($conexiune, $interogare);

if (!$rezultat) {
    die("Eroare la tabel: " . mysqli_error($conexiune));
}

if (mysqli_num_rows($rezultat) > 0) {
    while($rand = mysqli_fetch_assoc($rezultat)) {
        echo "Obiectiv: " . $rand['nume'] . " - Nota: " . $rand['nota'] . "<br>";
    }
} else {
    echo "Baza de date e goală. Adaugă date în phpMyAdmin!";
}
?>