<?php

//DB Connection
$conn = new PDO("sqlsrv:server = tcp:oac-db.database.windows.net,1433; Database = guild", "Subbi", "{Kalender85}");

//Variablen beschaffen
$crmProdid = 122352;
$ProductName = "kekse";
$ProductNumber ="Vanillekekse";

//Statement
$insert= $conn->prepare("    INSERT INTO crmProducts (crmProdid, ProductName, ProductNumber)
                            VALUES
                            (:crmProdid, :ProductName, :ProductNumber)
                            ");
$result = $insert->execute(array('crmProdid' => $crmProdid, 'ProductName'=> $ProductName, 'ProductNumber'=> $ProductNumber));

echo "Termin angelegt";
?>