<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order and Chaos - Scorejob</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3>Get Scores</h3>
    <script>
        //AJAX Select
        "use strict"
        //Abrufen der Daten per AJAX
        let member = new XMLHttpRequest();
            member.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let data = JSON.parse(this.responseText);
                }
        }
        member.open("GET", "php/select.php", true);
        member.send();
    
    
    </script>
</body>
</html>