<?php
$pdo = new PDO("sqlsrv:server = tcp:oac-db.database.windows.net,1433; Database = guild", "Subbi", "{Kalender85}");


$sql = "SELECT * FROM member";
foreach ($pdo->query($sql) as $row) {
   echo $row['charname']." ".$row['realm']." ".$row['class']."<br />";
}
?>