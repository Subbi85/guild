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
        let text =  '{ "member" : [';        
    
        //Abrufen der Daten per AJAX
        let member = new XMLHttpRequest();
        member.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let data = JSON.parse(this.responseText);
                console.log(data.length);
                console.log(data);
            }
        }
        member.open("GET", "php/select.php", true);
        member.send();

    

        let test=(data)=>{
            for (let y=0; y<data.length; y++){
                console.log(data[y].charname, data[y].realm);
                text += '{ "charname":"'+data[y].charname+'" , "realm":"'+data[y].realm+'"}';
            }
        }

        console.log(text);



        //Raider.io Scores abrufen


        let write =(data)=>{
            console.log({data});
            //AJAX-Call für jede Zeile
            for(let i=0; i<data.length; i++){
                var blizzRequest = new XMLHttpRequest();
                //Anpassen des "Problemrealms"
                if(data[i].realm ==="Guldan")
                    data[i].realm="Gul'dan";
                //AJAX-Syntax
      //          blizzRequest.open('GET', 'https://raider.io/api/v1/characters/profile?region=eu&realm='+data[i].realm+'&name='+data[i].charname+'&fields=mythic_plus_scores')
      //          blizzRequest.onload=function(){
                    //var score = JSON.parse(blizzRequest.responseText);
                    //var current = score.mythic_plus_scores.all;
                    console.log(data.realm, data.charname);
                    //text += '{ "charname":"'+data.charname+'" , "realm":"'+data.realm+'", "score": "'+current+'"}';
                    text += '{ "charname":"'+data.charname+'" , "realm":"'+data.realm+'"}';
                    //Komma anhängen bis zur letzten Zeile
                    if(i!=(data.length-1))
                        text +=',';
       /*         }                
                blizzRequest.send(); */
            }
        }

        /*
                text+= '{ "Charname":"'+charname+'" , "realm":"'+realm+'"}';
            }
            text +=  ' ]}';            
        }   
  */      







    </script>
</body>
</html>