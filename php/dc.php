<?php
$pdo = new PDO("sqlsrv:server = tcp:oac-db.database.windows.net,1433; Database = guild", "Subbi", "{Kalender85}");
$sql = " SELECT url
         FROM discord
         WHERE name = 'OaC'
        ";

$data=array();

foreach ($pdo->query($sql) as $row) {
   $data[]=$row;
}

echo json_encode($data);
?>