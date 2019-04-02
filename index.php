<?php

//DB Connection
$conn = new PDO("sqlsrv:server = tcp:oac-db.database.windows.net,1433; Database = guild", "Subbi", "{Kalender85}");

//Variablen beschaffen
$crmProdid = $_POST["terminname"];
$ProductName = $_POST["terminbeschreibung"];
$ProductNumber =$_POST["datum"];

//Statement
$insert= $pdo->prepare("    INSERT INTO crmProducts (crmProdid, ProductName, ProductNumber)
                            VALUES
                            (:crmProducts, :ProductName, :ProductNumber)
                            ");
$result = $insert->execute(array('crmProducts' => $crmProducts, 'ProductName'=> $ProductName, 'ProductNumber'=> $ProductNumber));

echo "Termin angelegt";
?>