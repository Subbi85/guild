<?php
// Funktionen für den Datenbankaufbau!
$server = "localhost";
$user ="root";
$password = "";
$dbname ="gilde";

$conn = new mysqli($server, $user, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Abrufen der Tabelle durch SQL-Statement
$sql = "SELECT * FROM members
        ";

// Rückmeldung Error/Success
$db_erg = mysqli_query( $conn, $sql);
if (!$db_erg ){
  die('Ungültige Abfrage: '.mysqli_error());
}

//Ausgabe in Tabelle
$array;

while ($zeile = mysqli_fetch_array( $db_erg)){
  $data[]=$zeile;
}

echo json_encode($data);

?>