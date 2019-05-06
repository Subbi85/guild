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
                console.log({data});
                console.log(data.length);
                console.log(data[10].charname);
                let daten =[];
                for (let i=0; i<data.length; i++){
                    daten.push(data[i]);
                }
                console.log(daten);
            }
        }
        member.open("GET", "php/select.php", true);
        member.send();

    
        //Raider.io Scores abrufen
        let charname ="Subbi";
        let realm = "Anetheron"
        let score = 23356.45
        let string ='{ "Charname":"'+charname+'" , "realm":"'+realm+'" ,"score":'+score+' },' ;

        var text =  '{ "member" : [' 
                    + '{ "Charname":"'+charname+'" , "realm":"'+realm+'" ,"score":'+score+' },' 
                    + string
                    + '{ "Charname":"'+charname+'" , "realm":"'+realm+'" ,"score":'+score+' },' ;


        let write =(charname, realm, score)=>{
            for (let i=0; i<=10; i++){
                text+= '{ "Charname":"'+charname+'" , "realm":"'+realm+'" ,"score":'+score+' }' 
                if(i==10){

                }else{
                    text+= ',';                    
                }

            }
            text +=  ' ]}';            
        }   
        
        write("Kreischi", "Nathrezim", 1555);

        console.log(text);
        var obj = JSON.parse(text);
        console.log(obj);


    </script>
</body>
</html>