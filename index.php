<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:oac-db.database.windows.net,1433; Database = guild", "Subbi", "{Kalender85}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Subbi@oac-db", "pwd" => "{Kalender85}", "Database" => "guild", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:oac-db.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

echo "test";

//Insert Statement
$crmProdid='12234';
$productName='kekse';
$productNumber=12335541;


$insert = $conn->prepare("  INSERT INTO crmProducts (crmProdid, ProductName, ProductNumber)
                            VALUES
                            ('12223', 'kekse', 'schokokekse')";
$insertReview = sqlsrv_query($conn, $insert);


sqlsrv_free_stmt($insertReview);
//ENDE Insert


?>