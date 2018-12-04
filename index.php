<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order and Chaos </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css"/>
</head>
<body>
    <div id="wrapper">
    <div class="section">
        <div class="container">
            <img src="css/img/wappen_middle.png" alt="css/img/wappen_small.png">
            <h1>Order and Chaos</h1>
            <div class="color-overlay"></div>
        </div>
    </div> <!-- Ende Section -->
    <nav><!-- Start Nav -->
    <div class="toggle">
        <i class="menu">|||</i>
    </div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#aboutUs">Über Uns</a></li>
            <li><a href="#raids">Raids</a></li>
            <li><a href="#mythic">Mythic+</a></li>
            <li><a href="#skills">Kontakt</a></li>
        </ul>
    </nav> <!-- Ende Nav -->
    <div id="aboutUs">
        <div id="desc"> <!--  CONTAINER -->
            <div id="box-1">
                <img src="css/img/test.jpg" alt="css/img/test.jpg" width="100%" height="">
            </div>
            <div id="box-2">
                <h3>Lok'thar Ogar, Freund!</h3>    
                <p> Wir sind die Gilde "Order and Chaos" vom Server Anetheron und sind allesamt treue und kampferprobte
                    Streiter der Horde. <br><br>
                    Unseren kleinen, verrückten und familiären Haufen von lieben Menschen gibt es seit Legion, genauer gesagt war <br>
                    Gul'dan, der sich zu der Zeit in der Nachtfestung aufhielt, der erste Bösewicht, dem wir gemeinsam das Handwerk gelegt haben. <br>
                    Und seitdem?<br><br>
                    Gut,dass du fragst! Seitdem waren wir ziemlich erfolgreich. Wir haben die letzten Raids immer geschafft unser Gildenziel
                    die Curve, also den Endboss in heroischer Schwierigkeit legen bevor der neue Raid rauskommt, zu erspielen. <br><br>
                    Will heißen: In unserer gemeinsamen Zeit haben alle Raids gelegen und auch der G'huun "Gott" musste sich uns geschlagen geben. <br>
                    Und was macht ihr sonst noch? <br> <br>
                    Noch eine super Frage: Wir gehen gern M+ Instanzen und versuchen uns da immer weiter zu steigern. Und ansonsten halt alles was ansteht... <br>
                    Weltquests, Inselexpeditionen, alte Raids und und und... <br><br>
                    Alles im Namen der Horde
                </p>
            </div>
        </div> 
    </div>
    <div id="raids">.<!-- Raids ENDE -->
        <h3>Rund um unsere Raids</h3>
        <p> Hier zeigen wir dir unseren Raidprogress der vergangenen Raidinstanzen. Aktiv gemeinsam raiden gehen wir <br>
            wie gesagt seit Nachtfestung in Legion.
        </p>
        <p>
            Hier unsere Daten: <br>
            <a href="https://raider.io/guilds/eu/anetheron/Order%20and%20Chaos" target="_blank">Raider.io</a> 
            <a href="https://www.warcraftlogs.com/guild/calendar/304372/" target="_blank"> WarcraftLogs </a>
        </p>
    <!-- Nachtfestung
        <div class="con">
            <h1>Clear! <br>
                Gul'dan plattgemacht</h1>
            <div class="col-overlay"></div>
        </div> -->
 
    <!-- Slider -->
        <div class="slider">
            <div class="slide"><p>Nightmare: CLEAR</p></div>
            <div class="slide"><p>Nighthold: CLEAR</p></div>
            <div class="slide"><p>Grabmahl des Sageras: CLEAR</p></div>
            <div class="slide"><p>Antorus: CLEAR</p></div>  
        </div>
    <!-- Slider ENDE-->


    </div> <!-- Raids ENDE -->

    <div id="mythic"> <!-- Mythic Plus -->.
        <h3>Mythic+ Instanzen </h3>
        <div class="affix" id="one"></div>
        <div id="t_one"></div>
        <div class="affix" id="two"></div>
        <div id="t_two"></div>
        <div class="affix" id="three"></div>
        <div id="t_three"></div>
        <div class="affix" id="four"></div>
        <div id="t_four"></div>


    </div> <!-- Mythic Plus ENDE -->

    </div> <!-- Ende Wrapper -->

    <script>
        // Nav-Bar jQuery
    $(document).ready(function(){
        $('.menu').click(function(){
            $('ul').toggleClass('active');
        });
    });
    </script>

</body>
</html>