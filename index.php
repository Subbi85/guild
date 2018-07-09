<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index - guild</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
</head>

<body>
    <div id="wrapper">
        <nav> <!-- Nav Bar -->
            <ul>
                <li><div class="logo"></div> Home</li>
                <a href="#aboutUs"><li><div class="logo"></div>Über uns</li></a>
                <a href="#progress"><li><div class="logo"></div>Progress</li></a>
                <a href="#rankings"><li><div class="logo"></div>Rankings</li></a>
                <a href="#contact"><li><div class="logo"></div>Kontakt</li></a>
            </ul>
        </nav>
    <section id="header"><!-- Grid im Header -->
        <div id="banner"></div>
        <div id="guildname1">Order</div>
        <div id="guildname2">and</div>
        <div id="guildname3">Chaos</div>
    </section>

    <section id="aboutUs">
    <div class="space">.</div>
        <h1>Das sind wir</h1>
        <p>
            Wir sind "Order and Chaos" vom Server Anetheron. <br>
            Wie unschwer zu erkennen, sind wir eine waschechte Hordegilde. <br>
            <br>
            Neben einem familiären Gildenklima und dem Zusammenhang unter den Membern. <br>
            Dazu nutzen wir unseren Gildendiscord auf dem Wir uns Abends gern die Zeit <br>
            vertreiben. <br>
            <br>
            Jetzt fragt ihr euch? Geselligkeit schön und gut, aber womit vertreiben sich <br>
            die Leute in Game die Zeit? <br>
            Die Antwort ist relativ schnell und einfach: Mit Allem was Spaß macht ;) <br>
            Dazu gehört zu allererst, dass wir den aktuellen HC Raid Content vor Öffnung <br>
            der nächsten Instanz und somit "in Time". <br>
            Aber auch Mythisch+ Instanzen, Questen und Erfolge. ;) <br> <br>
            
        </p>

    <div id="accordion">
  
        <button class="accordion">Merlicat - Anetheron</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            <br><br><a href="">Hier</a> geht es zum Battle.net.</p>
        </div>
        <button class="accordion">Knusperkeks - Anetheron</button>
        <div class="panel">
            <p>Ein Teil unseres "Gute Seele der Gilde"-Kompetenzteams. Knusper </p>
        </div>
        <button class="accordion">Kreischi - Nathrezim</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="accordion"> Subbì - Anetheron</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="accordion">Hauie - Anetheron </button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="accordion">Tack - Anetheron </button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="accordion"> Fluxzi - Anetheron </button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

    </div>

    </section>

    <section id="progress">
    <div class="space">.</div>
        <h1>Progress</h1>
    
    </section>

    <section id="rankings">
    <div class="space">.</div>
        <h1>Rankings</h1>

    <script>

    var acc = document.getElementsByClassName("accordion");
    var i;

    guildMembers();
    array();
    affixe();
    

    function guildMembers(){    /*Erstellen der Memberliste für weitere Funktionen */

        var guildRequest = new XMLHttpRequest();

        guildRequest.open('GET', 'https://eu.api.battle.net/wow/guild/Anetheron/Order%20and%20Chaos?fields=members&locale=en_GB&apikey=2z8d96ypab8zbed7nrbz29a3uqxskz5u')
        guildRequest.onload=function(){
            var test = JSON.parse(guildRequest.responseText);
            console.log(guildRequest.responseText);
        }  
        guildRequest.send();
    }

    
    function array(){       	                /* Aufbau der Memberliste der Gilde */
        var chars = ["Kreischi", "Hauie", "Hexenseele"];
        var server = ["Nathrezim", "Anetheron", "Thrall"];
            
        for (i=0; i<chars.length; i++){
            var name = chars[i];
            var realm = server[i];

            score(name, realm);
        };
    }

    function score(name, realm,i){

        var char = name;
        var realm = realm;

        var blizzRequest = new XMLHttpRequest();

        blizzRequest.open('GET', 'https://raider.io/api/v1/characters/profile?region=EU&realm='+realm+'&name='+char+'&fields=mythic_plus_scores%2C%20mythic_plus_best_runs%2C%20mythic_plus_recent_runs')
        blizzRequest.onload=function(){
            var test = JSON.parse(blizzRequest.responseText);
            console.log(blizzRequest.responseText);
        }  
        blizzRequest.send();
    }

    function affixe(){
    var blizzRequest = new XMLHttpRequest();
        blizzRequest.open('GET', 'https://raider.io/api/v1/mythic-plus/affixes?region=EU&locale=en')
        blizzRequest.onload=function(){
            var test = JSON.parse(blizzRequest.responseText);
            console.log(blizzRequest.responseText);
        }  
    blizzRequest.send();

    }

    // Menu Script
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
        
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            this.parent().children().removeClass(active);
        } 
        });
    }

    </script>
    
    </section>


    <section id="contact">
           <div class="space">.</div>
        <h1>Du hast Interesse?</h1>
        <div id="container">
            <input type="text" name="name" value="Name *"> </input>
            <input type="text" name="email" value="E-Mail *"> </input><br><br><br>
            <textarea rows="4" cols="55">Gib hier bitte deine Nachricht ein... *</textarea>
            <div class="button">Abschicken</div>
        </div>
    </section>

    <div id="footer">
        <ul>
            <a href="http://eu.battle.net/wow/de/guild/anetheron/Order_and_Chaos/" target:"_blank"><li><div class="logo"></div> Battle Net</li></a>
            <li><div class="logo"></div>Gildeninfos</li>
            <li><div class="logo"></div>Sonstiges</li>
        </ul>
    </div> 

    </div> <!-- Ende Wrapper -->

</body>
</html>
