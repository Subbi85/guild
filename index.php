<?php

//DB Connection
$conn = new PDO("sqlsrv:server = tcp:oac-db.database.windows.net,1433; Database = guild", "Subbi", "{Kalender85}");



//Statement
$insert= $conn->prepare("    INSERT INTO crmProducts (crmProdid, ProductName, ProductNumber)
                            VALUES
                            (:crmProducts, :ProductName, :ProductNumber)
                            ");
$result = $insert->execute(array('crmProducts' => $crmProducts, 'ProductName'=> $ProductName, 'ProductNumber'=> $ProductNumber));

echo "Termin angelegt";
?>