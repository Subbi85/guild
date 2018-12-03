<?php
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
    function createMemberList($conn){
    $url ='https://eu.api.battle.net/wow/guild/Anetheron/Order%20and%20Chaos?fields=members&locale=en_GB&apikey=2z8d96ypab8zbed7nrbz29a3uqxskz5u';
    $member_json = file_get_contents($url);
    $member_array = json_decode($member_json, true);

    $rows=count($member_array["members"]);

    for ($i=0; $i<$rows; $i++){
        $memberArray[$i][0] = $member_array['members'][$i]['character']['name'];
        $realm = $member_array['members'][$i]['character']['realm'];

        if($realm =="Gul'dan"){ // Unschöne Lösung!!!!
            $realm="Guldan";
        }
        if($realm =="Kil'jaeden"){
            $realm="Kiljaeden";
        }

        $memberArray[$i][1] = $realm;
        $memberArray[$i][2] = $member_array['members'][$i]['character']['class'];
        $memberArray[$i][3] = $member_array['members'][$i]['rank'];
    }

    echo ("Ergebnisse:");
    for ($i=0; $i<$rows; $i++){
        echo("#:".$i."<br>");
        for ($y=0; $y<4; $y++){
            echo ($memberArray[$i][$y]."<br>");    
        }
    }

    for ($i=0; $i<$rows; $i++){
    $name = $memberArray[$i][0];
    $realm = $memberArray[$i][1];
    $class = $memberArray[$i][2];
    $rank = $memberArray[$i][3];

    // Befüllen der SQL-Datenbank
        $insert="  INSERT INTO member (name, realm, class, rank)
                    VALUES
                    ('$name', '$realm', '$class', '$rank')
                ";

            if (mysqli_query($conn, $insert)) {
            echo "New records created successfully";
                } else {
            echo "Error: " . $insert . "<br>" . mysqli_error($conn);
            }
        }
    } // Ende createMemberList
//########################################################################

//########################################################################
//########################################################################
//########################################################################
    function getScores($conn){
        
        $select= "  SELECT name, realm, score, rank 
                    FROM member
                    WHERE rank IN ('0', '1', '3', '5')
                    ORDER BY rank ASC
                ";
        /*  0 -> Gildenmeister, 1-> , 3-> Gildenrat, 5-> */

        $result = $conn->query($select);
        $count = count($result);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $scores[$count]["name"] = $row["name"];
                $scores[$count]["realm"] = $row["realm"];
                $scores[$count]["rank"]=$row["rank"];
                $count++;
            }
        } else {
            echo "0 results";
        }
     
       // for ($i=1; $i<$count; $i++){

       //     $name= $scores[$i]["name"];
        //    $realm =$scores[$i]["realm"];
          
            $name = "Subbì";
            $realm ="Anetheron";

            $url = "https://raider.io/api/v1/characters/profile?region=eu&realm=$realm&name=$name&fields=mythic_plus_scores";
                    //https://raider.io/api/v1/characters/profile?region=eu&realm=Anetheron&name=Subb%C3%AC&fields=mythic_plus_scores


            $score_json = file_get_contents($url);
            $score_array = json_decode($score_json, true);
            $scores["score"] = $score_array["mythic_plus_scores"]["all"]; 
            echo ($name.":");
           echo ($scores["score"]."<br>");
        //}

        for ($i=1; $i<$count; $i++){

        $name = $scores[$i]["name"];
        $score = 765.88;
        /*$name = "Hauie";
        
        $rank = 1; */
        //$score = $scores[$i]["score"];
        $rank = $scores[$i]["rank"];

        $update="   UPDATE member
                    SET score = $score
                    WHERE name = '$name'
                    AND rank = $rank
                ";
        $conn->query($update);
        }
        if ($conn->query($update) === TRUE) {
            echo $count." Records updated successfully";
        }

    }// Ende getScores

//########################################################################
?>

<html>
<head>
    <meta charset="UTF-8">

    <title>PHP API </title>
    <?php
    //charInfo();
    //https://www.warcraftlogs.com:443/v1/reports/guild/Order%20and%20Chaos/Anetheron/EU?api_key=4d28ab7982ae116d3249c22dbc8f3158
    ?>
</head>
<body>

<img src="css/img/background/og.jpg" style="width:98vw; height:98vh; z-index:-1">
jpjfepjfefkpfejfo


<?php 
//createMemberList($conn);
getScores($conn);
?> 

</body>
</html>



<!--
https://www.warcraftlogs.com/v1/reports/guild/Order%20and%20Chaos/Anetheron/EU?api_key=4d28ab7982ae116d3249c22dbc8f3158
-->
