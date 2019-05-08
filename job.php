<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OaC local</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<style>
    .member{
        margin: 10px;
        padding:5px;
        outline:1px solid black;
        width: 80%;
        margin: 0 auto;
        color: darkblue;
    }
</style>
<body>
    <div id="display">
        <h4>Ergebnis</h4>
    </div>
    <script>
        "use strict";
        //Globals
        var text =  '{"member":[';  
        var counter =0;
        var size=0;

        //AJAX-Abruf der SQL Daten
        let member = new XMLHttpRequest();
        member.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let data = JSON.parse(this.responseText);
                let last = false;
                size= data.length;
                for(let i=0; i<data.length; i++){
                    if(i==(data.length-1)){
                        last=true;
                    }
                let result = getScores(data[i]);
                } 
            }
        }
        member.open("GET", "php/select.php");
        member.send();
    
        //Beschaffen der Scores
        let getScores=(data)=>{
            if (data.realm ==="Guldan")
                data.realm="Gul'dan";
            //AJAX-Syntax
            var blizzRequest = new XMLHttpRequest();
            blizzRequest.open('GET', 'https://raider.io/api/v1/characters/profile?region=eu&realm='+data.realm+'&name='+data.charname+'&fields=mythic_plus_scores')
            blizzRequest.onload=function(){
                var score = JSON.parse(blizzRequest.responseText);
                var current = score.mythic_plus_scores.all;
                text= createJSON(score, current);
            }                
            blizzRequest.send();
        }
    
          //Aufbau JSON
        let createJSON=(score, current)=>{
        counter++;
        text += '{ "charname":"'+score.name+'" , "realm":"'+score.realm+'", "score": "'+current+'"}';
        if(counter <size){
            text+=',';
        }
        if(counter==size){
            text+= ']}';
            let obj = JSON.parse(text);
            sortJSON(obj);
            createDivs(obj);
            //sendPHP(obj, text);
        }
        return text;
        }

        //Sortiere das JSON
        let sortJSON=(obj)=>{
            obj.member.sort(function(a,b){
                if(Number(a.score) == Number(b.score))
                    return 0;
                if(Number(a.score) > Number(b.score))
                    return -1;
                if(Number(a.score) < Number(b.score))
                    return 1;
            });
        }

        //Ausgabe der Daten im Div
        let createDivs=(obj)=>{
            let display = document.getElementById("display");
            console.log(obj);
            for(let i=0; i<obj.member.length; i++){
                let newDiv = document.createElement("div");
                newDiv.setAttribute("class", "member");
                let textNode = document.createTextNode(obj.member[i].charname+" -");
                newDiv.appendChild(textNode);
                textNode = document.createTextNode(obj.member[i].realm+" -");
                newDiv.appendChild(textNode);
                textNode = document.createTextNode(obj.member[i].score);
                newDiv.appendChild(textNode);
                display.appendChild(newDiv); 
            }
        }
    </script>
</body>
</html>