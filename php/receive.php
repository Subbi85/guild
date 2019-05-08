<?php

$received = file_get_contents("php://input");
$obj = json_decode($received, true);

var_dump($obj);
echo $received;

echo $obj['member'][10]['charname'];

$pdo = new PDO("mysql:dbname=gilde;host=localhost", "root", "" );

try {
     $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling
     //$sql ="CREATE TABLE ".$quizname."
     $sql ="CREATE TABLE test1 (
            id serial,
            fragenId int not null,
            PRIMARY KEY(id)
            );" ;
     //$pdo->exec($sql);
     print("Tabelle erstellt.\n");

} catch(PDOException $e) {
    echo $e->getMessage();//Remove or change message in production code
}






?>