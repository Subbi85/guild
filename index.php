<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:oac-db.database.windows.net,1433; Database = guild", "Subbi", "{Kalender85}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "die Verbindung steht";
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array(
                    "UID" => "Subbi@oac-db", 
                    "pwd" => "{Kalender85}", 
                    "Database" => "guild",
                    "LoginTimeout" => 30, "Encrypt" => 1, 
                    "TrustServerCertificate" => 0);

$serverName = "tcp:oac-db.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

$statement = "  SELECT *
                FROM  dbo.crmProducts";

$result = sqlsrv_query($conn, $sql);

if ($result == FALSE){
    echo (sqlsrv_errors());
}else{
    echo "läuft... endlich";
}

while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    echo ("Test");
}

sqlsrv_free_stmt($result);


?>