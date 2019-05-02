<?php
$pdo = new PDO("sqlsrv:server = tcp:oac-db.database.windows.net,1433; Database = guild", "Subbi", "{Kalender85}");


$sql = " SELECT m.charname, m.realm, c.name as classname
         FROM members as m
         INNER JOIN roles as r
         ON m.roleId = r.id
         INNER JOIN classes as c
         ON m.classId = c.id";

$data=array();

foreach ($pdo->query($sql) as $row) {
   $data[]=$row;
}

echo json_encode($data);
?>