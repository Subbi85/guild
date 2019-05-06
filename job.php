<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order and Chaos - Scorejob</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
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
                console.log(data.length);
                console.log(data[10].charname);
                write(data);
            }
        }
        member.open("GET", "php/select.php", true);
        member.send();

    
        //Raider.io Scores abrufen


        var text =  '{ "member" : [';

        let write =(data)=>{
            console.log({data});
            //AJAX-Call für jede Zeile
            for(let i=0; i<data.length; i++){
                var scores = [];
                var blizzRequest = new XMLHttpRequest();
                //Anpassen des "Problemrealms"
                if(data.realm ==="Guldan")
                    data.realm="Gul'dan";
                //AJAX-Syntax
                blizzRequest.open('GET', 'https://raider.io/api/v1/characters/profile?region=eu&realm='+data.realm+'&name='+data.charname+'&fields=mythic_plus_scores')
                blizzRequest.onload=function(){
                    var score = JSON.parse(blizzRequest.responseText);
                    var current = score.mythic_plus_scores.all;
                    console.log(data.realm, data.charname, current);
                    text += '{ "charname":"'+data.charname+'" , "realm":"'+data.realm+'", "score": "'+current+'"}';
                    //Komma anhängen bis zur letzten Zeile
                    if(i!=(data.length-1))
                        text +=',';
                }                
                blizzRequest.send();
            }
        }

        console.log(text);
        /*
                text+= '{ "Charname":"'+charname+'" , "realm":"'+realm+'"}';
            }
            text +=  ' ]}';            
        }   
  */      







    </script>
</body>
</html>