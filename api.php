<?php
// Funktionen für den Datenbankaufbau!
$server = "localhost";
$user ="root";
$password = "";
$dbname ="gilde";

$conn = new mysqli($server, $user, $password, $dbname);
$conn->set_charset("utf8");

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

function raiderio(){

}
$i=0;
$scoreArray= array(
                array(1,2,3,5),
                array(2,4,5,6),
                array(5,4,3,2),
                array(1,2,3,4),
            );

function createMemberList($conn){
    $url = 'https://raider.io/api/v1/characters/profile?region=eu&realm=Nathrezim&name=Kreischi&fields=mythic_plus_scores';
    //$url ='https://eu.api.blizzard.com/wow/guild/Anetheron/Order and Chaos?fields=members&locale=en_EU&access_token=USQJPAObMPNHz4nC2TQ71VtsJFTKWY5RN0';
    $member_json = file_get_contents($url);
    $member_array = json_decode($member_json, true);

    //Check ob Array leer ist...
    if(!$member_array){
        echo "leer";
    }else{
        echo "gefunden";
    }
    echo $member_json;

} // Ende createMemberList

echo $scoreArray[0][0];

createMemberList($conn);