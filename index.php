<?php
//DB Connection
//$conn = new PDO("sqlsrv:server = tcp:oac-db.database.windows.net,1433; Database = guild", "Subbi", "{Kalender85}");

//Variablen beschaffen
/*
$crmProdid = 122352;
$ProductName = "kekse";
$ProductNumber ="Vanillekekse";

//Statement
$insert= $conn->prepare("   INSERT INTO crmProducts (crmProdid, ProductName, ProductNumber)
                            VALUES
                            (:crmProdid, :ProductName, :ProductNumber)
                            ");
$result = $insert->execute(array('crmProdid' => $crmProdid, 'ProductName'=> $ProductName, 'ProductNumber'=> $ProductNumber));
*/



// Funktionen für den Datenbankaufbau!
$server = "sqlsrv:server = tcp:oac-db.database.windows.net,1433";
$user ="Subbi";
$password = "Kalender85";
$dbname ="guild";

$conn = new mysqli($server, $user, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
  echo "klappt <br>";
}












?>

