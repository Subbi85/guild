<?php
// Funktionen für den Datenbankaufbau!
$server = "localhost";
$user ="root";
$password = "";
$dbname ="gilde";

$conn = new mysqli($server, $user, $password, $dbname);
$conn->set_charset("utf8");

echo "Hallo";
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
//########################################################################
//##############################createMemberList##########################
//######################################################################## 
function deleteTable($conn){
    //Zuerst wird die bestehende Tabelle gelöscht
    $deleteStatement = "";
    //Im Anschluss wird eine neue Tabelle erstellt
    $createStatement ="";
}
//


function createMemberList($conn){
    //$url ='https://eu.api.blizzard.com/wow/guild/Anetheron/Order and Chaos?fields=members&locale=en_EU&access_token=USQJPAObMPNHz4nC2TQ71VtsJFTKWY5RN0';
    $member_json = file_get_contents($url);
    $member_array = json_decode($member_json, true);

    $rows=count($member_array["members"]);

    //Check ob Array leer ist...
   if(!$member_array){
       echo "leer";
   } else{
       echo "gefunden";
   }
} // Ende createMemberList

createMemberList($conn);