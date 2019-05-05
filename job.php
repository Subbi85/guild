<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order and Chaos - Scorejob</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="script.js"></script>
</head>
<body>
    <h3>Get Scores</h3>
    <div id="container"><!--Platz für neue Divs --></div>
    <script>
        //AJAX Select
        "use strict"
        var finalArray=[];
        //Abrufen der Daten per AJAX
        let member = new XMLHttpRequest();
            member.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let data = JSON.parse(this.responseText);
                    console.log(data);
                    let daten =[];
                    for (let i=0; i<data.length; i++){
                        daten.push(data[i]);
                        getScores(daten[i]);
                    }
                }
        }
        member.open("GET", "php/select.php", true);
        member.send();

        //Raider.io Scores abrufen
        let getScores=(daten)=>{
            console.log(daten.charname, daten.realm);
            if(daten.realm==="Guldan")
                daten.realm="Gul'dan";
            var blizzRequest = new XMLHttpRequest();
            blizzRequest.open('GET', 'https://raider.io/api/v1/characters/profile?region=eu&realm='+daten.realm+'&name='+daten.charname+'&fields=mythic_plus_scores')
            blizzRequest.onload=function(){
                let score = JSON.parse(blizzRequest.responseText);
                let current = score.mythic_plus_scores.all;
                let scores=[];
                scores.push(daten.charname);
                scores.push(daten.realm);
                scores.push(current);
                finalArray.push(scores);
                }
            blizzRequest.send();
        }
        
        for (let i=0; i<finalArray.length; i++){
            console.log(finalArray[i]);
        }


    </script>
</body>
</html>