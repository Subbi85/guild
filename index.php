<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order and Chaos - Anetheron EU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/w3.css" />
    <link rel="icon" type="image/png" href="css/img/favicon.png" sizes="32x32">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>    
    <script src="js/scores.js" defer></script>
    <script src="js/slider.js"defer ></script>
    <script src="js/main.js" defer></script>
    <script src="js/kalender.js" defer></script>
    <script src="js/discord.js" defer></script>
    <script src="js/login.js" defer></script>
    <!-- <script src="js/streams.js" defer></script> -->
</head>
<body>
<div id="wrapper">
    <!-- Landing -->
    <div class="section" id="landing">
        <div class="landing_container">
            <img src="css/img/logo.png" alt="css/img/logo.png" id="titlepic">
            <h1 class="morpheus">Order and Chaos</h1> <br>
            <h3 class="morpheus">Anetheron - EU</h3>
            <a href="#about"><div class="button morpheus">Start</div></a>
        </div>
    </div>
    <!-- Landing ENDE-->
    <!-- Navigation -->
    <div class="topnav" id="myTopnav">
        <a href="#landing" class="nav_link">Home</a>
        <a href="#about" class="nav_link">Über Uns</a>
        <a href="#raids" class="nav_link">Raids</a>
        <a href="#mythic" class="nav_link ">Mythic+</a>
        <a href="#kontakt" class="nav_link">Kontakt</a>
        <a href="vids.html" target="_blank" class="nav_link">Videos</a>
        <a class="nav_link container--right" onclick="showLogin()" id="login_container">Login</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars">|||</i>      
        </a>
    </div>
    <!-- Navigation ENDE -->
    <!-- Über Uns -->
    <div class="section" id="about">
        <div class="container_toggle" id="test">Test</div>
        <div class="about_box" id="text">
            <h3 class="morpheus">Lok'thar Ogar, Freund!</h3>            
            <p id="about_text">
                Wir sind die Gilde "Order and Chaos" vom Server Anetheron und sind allesamt treue und kampferprobte Streiter der Horde. <br><br>
                Unseren kleinen, verrückten und familiären Haufen von lieben Menschen gibt es seit Legion, genauer gesagt war 
                Gul'dan, der sich zu der Zeit in der Nachtfestung aufhielt, der erste Bösewicht, dem wir gemeinsam das Handwerk gelegt haben. 
                <h4 class="morpheus">Was sind eure Ziele ?</h4>
                Gut,dass du fragst! Seitdem waren wir ziemlich erfolgreich. Wir haben die letzten Raids immer geschafft unser Gildenziel die Curve, also den Endboss in heroischer Schwierigkeit legen bevor der neue Raid rauskommt, zu erspielen. <br><br>
                Will heißen: In unserer gemeinsamen Zeit haben alle Raids gelegen und auch der G'huun "Gott" musste sich uns geschlagen geben. Doch damit nicht genug. Auch Jaina haben wir erfolgreich aus Daza'Alor vertrieben. <br>
                Und nach langem Kampf konnten wir auch Uu'nat, den Vorboten der Leere, besiegen und triumphieren...
                <h4 class="morpheus">Und was macht ihr, wenn ihr nicht raidet?</h4>
                Noch eine super Frage: Wir gehen gern M+ Instanzen und versuchen uns da immer weiter zu steigern. Außerdem stehen Erfolgsruns in den Raids auch dann und wann auf der Tagesordnung.
                Und ansonsten halt alles was ansteht... Weltquests, Inselexpeditionen, alte Raids und und und... <br><br>
                <h4 class="morpheus">Du willst uns auch mal spielen sehen?</h4>
                Dann schau doch einfach mal bei einem unserer Streams vorbei und finde heraus, ob es dir gefällt. <br>
                Zu den Streams geht's <span id="myBtn" class="morpheus  modal_span">hier</span>   <br> <br>
                Alles im Namen der Horde, <br>
                <span id="handwirting">Das OaC- Team</span>
            </p>
        </div>
        <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content" id="info">
                    <span class="close">&times;</span>
                    <p class="morpheus">Unsere Streams:</p>
                </div>
            </div>
        <!-- Modal ENDE  -->
        <div class="about_box" id="pic">
            <div class="slideshow-container">
                <!-- Palast -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 8</div>
                    <img src="css/img/ashvane.jpg" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">Lady Aschenwind Mythic DOWN!</h4>    
                        Und endlich sind wir bei 4/8 Mythic
                    </div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 8</div>
                    <img src="css/img/glanz_mythic.png" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">Azsharas Glanz Mythic DOWN!</h4>    
                        Es war unser erster Abend mythic, und am Ende lag auch Azsharas Glanz.. <br>
                        Guter Anfang
                    </div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 8</div>
                    <img src="css/img/palast.png" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">Der Ewige Palast hc clear</h4>    
                        Endlich ist der Palast auch im heroischen Modus clear!
                    </div>
                </div>

                <!-- Palast -->
                <div class="mySlides fade">
                    <div class="numbertext">4 / 8</div>
                    <img src="css/img/azsharanhc.png" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">Der Ewige Palast nhc clear</h4>    
                        Königin Azshara wurden die Tentakel gestutzt.
                    </div>
                </div>

                <!-- Tiegel -->
                <div class="mySlides fade">
                    <div class="numbertext">5 / 8</div>
                    <img src="css/img/tiegelhc.jpg" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">Tiegel des Sturms Hc clear</h4>    
                        Der Tiegel ist nun auch bereinigt!
                    </div>
                </div>

                <!-- Tiegel -->
                <div class="mySlides fade">
                    <div class="numbertext">6 / 8</div>
                    <img src="css/img/angeln.jpg" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">Holt die Angeln raus...</h4>    
                        Wenn es mal wieder länger dauert...
                    </div>
                </div>

                <!-- BoD -->
                <div class="mySlides fade">
                    <div class="numbertext">7 / 8</div>
                    <img src="css/img/bod.jpg" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">BoD Hc clear</h4>    
                        endlich wurde auch Jaina vertrieben
                    </div>
                </div>

                <!-- Uldir -->
                <div class="mySlides fade">
                    <div class="numbertext">8 / 8</div>
                    <img src="css/img/ghuun.png" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">Uldir Hc clear</h4>
                        G'huun liegt am Boden
                    </div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
    </div>

    <!-- Über Uns ENDE -->
    <!-- Raids -->
    <div class="section" id="raids">
        <div class="tab">
            <button class="tablinks morpheus" id="defaultOpen" onclick="openTab(event, 'BfA')">BfA</button>
            <button class="tablinks morpheus" onclick="openTab(event, 'Legion')">Legion</button>
            <button class="tablinks morpheus" onclick="openTab(event, 'kader')">Kader</button>
            <button class="tablinks morpheus" onclick="openTab(event, 'Infos')">Infos</button>
            <button class="tablinks morpheus" onclick="openTab(event, 'Kalender')">Kalender</button>
        </div>

        <div id="BfA" class="tabcontent">
            <h3 id="headline" class="morpheus">Ny'alotha, die erwachte Stadt</h3>
            <div class="skillbar clearfix " data-percent="17%" onmouseenter="hintergrundWechseln('nyalotha')">
                <div class="skillbar-title" style="background: #a09797;"><span>mythic</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#111">2/12</div>
            </div> <!-- End Skill Bar -->

             <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('nyalotha')">
                <div class="skillbar-title" style="background: #a09797;"><span>heroic</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">12/12</div>
            </div> <!-- End Skill Bar -->

             <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('nyalotha')">
                <div class="skillbar-title" style="background: #a09797;" ><span> nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">12/12</div>
            </div> <!-- End Skill Bar -->

            <h3 id="headline" class="morpheus">Der Ewige Palast</h3>
            <div class="skillbar clearfix " data-percent="50%" onmouseenter="hintergrundWechseln('palast')">
                <div class="skillbar-title" style="background: #a09797;"><span>Palast mythic</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#111">4/8</div>
            </div> <!-- End Skill Bar -->

             <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('palast')">
                <div class="skillbar-title" style="background: #a09797;"><span>Palast hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">8/8</div>
            </div> <!-- End Skill Bar -->

             <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('palast')">
                <div class="skillbar-title" style="background: #a09797;" ><span>Palast nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">8/8</div>
            </div> <!-- End Skill Bar -->

            <h3 id="headline" class="morpheus">Tiegel der Stürme</h3>
             <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('tiegel')">
                <div class="skillbar-title" style="background: #a09797;"><span>Tiegel hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">2/2</div>
            </div> <!-- End Skill Bar -->
        
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('tiegel')">
                <div class="skillbar-title" style="background: #a09797;"><span>Tiegel nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">2/2</div>
            </div> <!-- End Skill Bar -->

            <!-- Dazar -->
            <h3 id="headline" class="morpheus">Belagerung von Dazar'Alor</h3>
            <div class="skillbar clearfix" data-percent="20%" onmouseenter="hintergrundWechseln('dazar')">
                <div class="skillbar-title" style="background: #a09797;"><span>Dazar mythic</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">2/9</div>
            </div> <!-- End Skill Bar -->
        
            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('dazar')"> 
                <div class="skillbar-title" style="background: #a09797;"><span>Dazar'Alor hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('dazar')">
                <div class="skillbar-title" style="background: #a09797;"><span>Dazar'Alor nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">9/9</div>
            </div> <!-- End Skill Bar -->

            <!-- Uldir -->
            <h3 id="headline" class="morpheus">Uldir</h3>
            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('uldir')">
                <div class="skillbar-title" style="background: #a09797;"><span>Uldir hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">8/8</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('uldir')">
                <div class="skillbar-title" style="background: #a09797;"><span>Uldir nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">8/8</div>
            </div> <!-- End Skill Bar -->
        </div>

        <div id="Legion" class="tabcontent">
            <h3 id="headline" class="morpheus">Antorus, der brennende Thron</h3>
            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('antorus')">
                <div class="skillbar-title" style="background: #a09797;"><span>Antorus hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">11/11</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('antorus')">
                <div class="skillbar-title" style="background: #a09797;"><span>Antorus nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">11/11</div>
            </div> <!-- End Skill Bar -->

            <h3 id="headline" class="morpheus">Grabmal des Sageras</h3>
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('grab')">
                <div class="skillbar-title" style="background: #a09797;"><span>Grabmal hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('grab')">
                <div class="skillbar-title" style="background: #a09797;"><span>Grabmal nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">9/9</div>
            </div> <!-- End Skill Bar -->

            <h3 id="headline" class="morpheus">Nachtfestung</h3>
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('nachtfestung')">
                <div class="skillbar-title" style="background: #a09797;"><span>Nachtfest. hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">10/10</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('nachtfestung')">
                <div class="skillbar-title" style="background: #a09797;"><span>Nachtfest. nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">10/10</div>
            </div> <!-- End Skill Bar -->

            <h3 id="headline"  class="morpheus">Prüfung der Tapferkeit</h3>
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('trials')">
                <div class="skillbar-title" style="background: #a09797;"><span>Trials hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">2/2</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('trials')">
                <div class="skillbar-title" style="background: #a09797;"><span>Trials nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">2/2</div>
            </div> <!-- End Skill Bar -->

            <h3 id="headline"  class="morpheus">Smaragdgrüner Alptraum</h3>
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('smaragd')">
                <div class="skillbar-title" style="background: #a09797;"><span>Alptraum hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">7/7</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('smaragd')">
                <div class="skillbar-title" style="background: #a09797;"><span>Alptraum nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent" style= "color:#fff">7/7</div>
            </div> <!-- End Skill Bar -->
        </div>
        <div id="kader" class="tabcontent">
            <script>
            //AJAX Select
            "use strict"
            //Abrufen der Daten per AJAX
            let membercall = new XMLHttpRequest();
            membercall.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let data = JSON.parse(this.responseText);
                    tabellenBauen(data);
                }
            }
            membercall.open("GET", "php/select.php", true);
            membercall.send();
            </script>
            <div id="kader_container">
                <div class="kader" id="tanks">
                    <h4>Tanks</h4>                    
                    <table id="table_tanks"></table>
                </div>
                <div class="kader" id="heals">
                    <h4>Heiler</h4>
                    <table id="table_heals"></table>
                </div>
                <div class="kader" id="ranges">
                    <h4>Ranges</h4>
                    <table id="table_ranges"></table>
                </div>
                <div class="kader" id="melees">
                    <h4>Melees</h4>
                    <table id="table_melees"></table>
                </div>
            </div>
        </div>

        <div id="Infos" class="tabcontent">
            <h3 class="morpheus">Informationen</h3>
            <p id="raidtext">
            Wow, du hast dir bisher alles auf dieser Seite angeschaut und bist immernoch nicht weggerannt? Respekt! 
            Was? Du hast sogar ernsthaftes Interesse mit uns raiden zu gehen? Cool, hier gibt's noch weitere Informationen für dich: 
            Unsere aktuellen Raidzeiten sind: <br> <br>

            Montag, 20:30-23.00 <br>
            Mittwoch, 20:30-23.00 <br> <br>

            Aktuell legen wir montags immer die Bosse, die vom Mittwoch "übrig geblieben sind". Es soll sich ja auch niemand vernachlässigt fühlen. 
            Sollten wir in einer Woche schon am Mittwoch mit allem fertig sein, überlegen wir uns in der Regel etwas als Alternativplan. Was das dann ist? 
            Wieder eine sehr gute Frage. Also der Alternativplan kann sein, dass man einen Twinkrun macht, ggf. Timewalks geht oder eben M+. Wichtig ist uns, dass 
            wir trotzdem was gemeinsam machen. <br><br>

            Ach fast hätten wir noch was wichtiges vergessen: Unsere Links zu Raider.io und natürlich unsere Logs, die du dir gern mal anschauen kannst, um dir ein Bild zu machen. 
            Die Links findest du hier: <br>	
            <a href="https://raider.io/guilds/eu/anetheron/Order%20and%20Chaos" target="_blank"><span class="links"> Raider.io  </span></a> <br>
            <a href="https://www.warcraftlogs.com/guild/calendar/304372/" target="_blank"><span class="links">Warcraftlogs</span></a> <br>
            Soooo... jetzt weißt du aber wirklich so gut wie alles. <br>
            </p>
        </div>

        <div id="Kalender" class="tabcontent">    
            <h1>Monatskalender</h1>
            <!--Kalenderelement-->
            <div id="kalender_container">
                <table id="kalender_table"> </table>                
            </div>
            <button onclick="createNewKalender('prev')">Letzter</button>
            <button onclick="createNewKalender('next')">Nächster</button>
        </div>
    </div>
    </div>
    <!-- Raids Ende -->
    <div class="parallax morpheus" id="para_mythic">
        <h2 class="morpheus">Mythic Plus</h2>
        Affixe & Scores
    </div>

    <!-- Mythic Plus-->
    <div class="section" id="mythic">
        <div class="card_container">      
            <!-- Erstes Affix -->  
            <div class="card">
                <input id="input" type="checkbox" name="">
                <div class="toggle"></div>
                <div class="imgBox">
                    <img src="css/img/logo.png" alt="">
                </div>
                <div class="content">
                <h3 id="content_head_one" class="morpheus"></h3>
                    <p id="content_one"></p>
                </div>
            </div>

            <!-- Zweites Affix -->
            <div class="card">
                <input id="input" type="checkbox" name="">
                <div class="toggle"></div>
                <div class="imgBox">
                    <img src="css/img/logo.png" alt="">
                </div>
                <div class="content">
                <h3 id="content_head_two" class="morpheus"></h3>
                    <p id="content_two"></p>
                </div>
            </div>

            <!-- Drittes Affix -->
            <div class="card">
                <input id="input" type="checkbox" name="">
                <div class="toggle"></div>
                <div class="imgBox">
                    <img src="css/img/logo.png" alt="">
                </div>
                <div class="content">
                <h3 id="content_head_three" class="morpheus"></h3>
                    <p id="content_three"></p>
                </div>
            </div>

            <!-- Viertes Affix -->
            <div class="card">
                <input id="input" type="checkbox" name="">
                <div class="toggle"></div>
                <div class="imgBox">
                    <img src="css/img/logo.png" alt="">
                </div>
                <div class="content">
                <h3 id="content_head_four" class="morpheus"></h3>
                    <p id="content_four"></p>
                </div>
            </div>
            <!--###################################### -->
        </div>
        <div class="scores">
            <!-- Scoretabelle -->
            <div id="table_scores">
                <span>Klicke auf einen der oben aufgeführten Charaktere, 
                    um Informationen zu den besten drei Mythic Plus Instanzen des Chars zu erhalten</span>
                <table id="tbl">
                    <tr>
                        <th class="morpheus">Platz</th>
                        <th class="morpheus">Name</th>
                        <th class="morpheus">Realm</th>
                        <th class="morpheus">Score</th>
                        <th class="morpheus"></th>
                    </tr>
                </table>
            <div id="details">
                <div id="details_container">
                </div>
            </div>
            </div> <!-- Ende Table -->
        </div><!-- Ende Scores -->
    </div>

    </div><!-- Mythic Plus ENDE-->
    <div class="parallax morpheus" id="para_kontakt">
        <h3 class="morpheus">Kontakt</h3>
    </div>
    <!-- Kontakt -->
    <div class="section" id="kontakt">
        <h3 class="morpheus">Wir suchen Verstärkung...</h3>
        <p> Du hast gefallen an unsere Gilde gefunden und willst uns kennenlernen? <br>
            Dann trage einfach deine Informationen (Charname, Realm und Klasse) ein und schreib uns eine Nachricht. <br>
            (Am besten mit Battle-Tag, damit wir uns auch bei dir melden können).
        </p>
        <h3 class="morpheus">Und was suchen wir ?</h3>
        <div class="search">
            <div class="searchcontainer">
                <p>Wir sind immer auf der Suche nach fähigen Spielern, die gemeinsam mit uns den Raid- und <br>
                Mythic Plus Content bestreiten wollen. <br> <br>
                Aktuell suchen wir primär nach Tanks bzw. Heilern, aber auch DDs sind immer gern gesehen. <br>  <br>              
                Du raidest nicht, bist aber trotzdem interessiert? Macht nichts ^^ Da wir eine familiäre Gilde sind, <br>
                haben auch Spieler abseits der Raids einen Platz bei uns. Schreib uns einfach und lerne uns kennen.
                </p>
            </div>
            <div class="searchpic">
                <img src="css/img/recruit.png" alt="css/img/recruit.png">
            </div>
        </div>
    </div>

    <div id="contact_container">
        <div id="input_container">
            <input type="text" class="input morpheus" id ="charname" placeholder="Charname" autocomplete="off"> <br>
            <select id="class" class="input morpheus">
                <option value="dh">Dämonenjäger</option>
                <option value="druid">Druide</option>
                <option value="warlock">Hexenmeister</option>
                <option value="hunter">Jäger</option>
                <option value="warrior">Krieger</option>
                <option value="mage">Magier</option>
                <option value="monk">Mönch</option>
                <option value="paladin">Paladin</option>
                <option value="priest">Priester</option>
                <option value="shaman">Schamane</option>
                <option value="rogue">Schurke</option>
                <option value="dk">Todesritter</option>
            </select> <br>
            <select id="realm" class="input morpheus">
                <option value="anetheron">Anetheron</option>
                <option value="nathrezim">Nathrezim</option>
                <option value="guldan">Gul'dan</option>
                <option value="rajaxx">Rajaxx</option>
                <option value="festung-der-stürme">Festung der Stürme</option>
                <option value="kiljaeden">Kil'jaeden</option>
            </select> <br>
            <div class="button morpheus" onClick="getData()">Absenden</div>
            <div id="contact_response"></div>
        </div>
        <div id="textarea_container">
            <textarea name="messagetext" class="input morpheus" id="message" cols="30" rows="10" placeholder="Deine Nachricht an uns..."></textarea>
        </div>
    </div>
    <!--Footer -->
    <div class="section" id="footer">
        <ul id="footerlist">
            <li  class="morpheus"><a href="impressum.html" target="_blank" class="morpheus">Impressum</a> </li>
            <li><a href="https://worldofwarcraft.com/de-de/guild/eu/anetheron/order-and-chaos" target="_blank" class="morpheus">Battle.net</a></li>
            <li> <a href="https://lars.schleyer-sw.de/" target="_blank"><img src="css/img/subbi.png" width="32px"> </a> </li>
        </ul>
    </div>
</div> <!--ENDE WRAPPER -->
<script>
     $(document).ready(function() {
        $('.progress .progress-bar').css("width",
            function() {
                return $(this).attr("aria-valuenow") + "%";
            }
        )

        $('.skillbar').each(function(){
            $(this).find('.skillbar-bar').animate({
                width:$(this).attr('data-percent')
            },3000);
        });
    });

    //Burger Menu
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    
    document.getElementById("defaultOpen").click();

    function openTab(evt, tabName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    /*btn.onclick = function() {
    modal.style.display = "block";
    }*/

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }

</script>
</body>
</html>
