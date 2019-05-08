<?php
//$pdo = new PDO("sqlsrv:server = tcp:oac-db.database.windows.net,1433; Database = guild", "Subbi", "{Kalender85}");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order and Chaos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="w3.css" />
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>    
    <script src="script.js"></script>
    <script src="scores.js"></script>
    <script src="main.js" defer></script>
</head>
<body>
    <!-- Landing -->
    <div class="section" id="landing">
        <div class="landing_container">
            <img src="css/img/logo.png" alt="css/img/logo.png" id="titlepic">
            <h1>Order and Chaos</h1> <br>
            <h3>Anetheron - EU</h3>
            <a href="#about"><div class="button">Start</div></a>
        </div>
    </div>
    <!-- Landing ENDE-->
    <!-- Navigation -->
    <div class="topnav" id="myTopnav">
        <a href="#landing">Home</a>
        <a href="#about">Über Uns</a>
        <a href="#raids">Raids</a>
        <a href="#mythic">Mythic+</a>
        <a href="#kontakt">Kontakt</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars">|||</i>      
        </a>
    </div>
    <!-- Navigation ENDE -->
    <!-- Über Uns -->
    <div class="section" id="about">.
        <div class="about_box" id="text">
                <h3>Lok'thar Ogar, Freund!</h3>            
            <p id="about_text">
                Wir sind die Gilde "Order and Chaos" vom Server Anetheron und sind allesamt treue und kampferprobte Streiter der Horde. <br><br>
                Unseren kleinen, verrückten und familiären Haufen von lieben Menschen gibt es seit Legion, genauer gesagt war 
                Gul'dan, der sich zu der Zeit in der Nachtfestung aufhielt, der erste Bösewicht, dem wir gemeinsam das Handwerk gelegt haben. 
                Und seitdem? <br><br>
                Gut,dass du fragst! Seitdem waren wir ziemlich erfolgreich. Wir haben die letzten Raids immer geschafft unser Gildenziel die Curve, also den Endboss in heroischer Schwierigkeit legen bevor der neue Raid rauskommt, zu erspielen. <br><br>
                Will heißen: In unserer gemeinsamen Zeit haben alle Raids gelegen und auch der G'huun "Gott" musste sich uns geschlagen geben. 
                Und was macht ihr sonst noch? <br><br>
                Noch eine super Frage: Wir gehen gern M+ Instanzen und versuchen uns da immer weiter zu steigern. Und ansonsten halt alles was ansteht... 
                Weltquests, Inselexpeditionen, alte Raids und und und... <br><br>
                Alles im Namen der Horde
            </p>
        </div>
        <div class="about_box" id="pic">
        </div>
    </div>

    <!-- Über Uns ENDE -->
    <!-- Raids -->
    <div class="section" id="raids">

        <div class="tab">
            <button class="tablinks" id="defaultOpen" onclick="openTab(event, 'BfA')">BfA</button>
            <button class="tablinks" onclick="openTab(event, 'Legion')">Legion</button>
            <button class="tablinks" onclick="openTab(event, 'kader')">Kader</button>
            <button class="tablinks" onclick="openTab(event, 'Infos')">Infos</button>
        </div>

        <div id="BfA" class="tabcontent">
            <h3>Tiegel der Stürme</h3>
             <div class="skillbar clearfix " data-percent="50%" onmouseenter="hintergrundWechseln('tiegel')">
                <div class="skillbar-title" style="background: #a09797;"><span>Tiegel hc</span></div>
                <div class="skillbar-bar" style="background: #ee202b;"></div>
                <div class="skill-bar-percent">1/2</div>
            </div> <!-- End Skill Bar -->
        
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('tiegel')">
                <div class="skillbar-title" style="background: #a09797;"><span>Tiegel nhc</span></div>
                <div class="skillbar-bar" style="background: #ee202b;"></div>
                <div class="skill-bar-percent">2/2</div>
            </div> <!-- End Skill Bar -->

            <!-- Dazar -->
            <h3>Belagerung von Dazar'Alor</h3>
            <div class="skillbar clearfix" data-percent="20%" onmouseenter="hintergrundWechseln('dazar')">
                <div class="skillbar-title" style="background: #a09797;"><span>Dazar mythic</span></div>
                <div class="skillbar-bar" style="background: gold;"></div>
                <div class="skill-bar-percent">2/9</div>
            </div> <!-- End Skill Bar -->
        
            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('dazar')"> 
                <div class="skillbar-title" style="background: #a09797;"><span>Dazar'Alor hc</span></div>
                <div class="skillbar-bar" style="background: gold;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('dazar')">
                <div class="skillbar-title" style="background: #a09797;"><span>Dazar'Alor hc</span></div>
                <div class="skillbar-bar" style="background: gold;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <!-- Uldir -->
            <h3>Uldir</h3>
            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('uldir')">
                <div class="skillbar-title" style="background: #a09797;"><span>Uldir hc</span></div>
                <div class="skillbar-bar" style="background: ##67b264;"></div>
                <div class="skill-bar-percent">8/8</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('uldir')">
                <div class="skillbar-title" style="background: #a09797;"><span>Uldir nhc</span></div>
                <div class="skillbar-bar" style="background: ##60b55c;"></div>
                <div class="skill-bar-percent">8/8</div>
            </div> <!-- End Skill Bar -->
        </div>

        <div id="Legion" class="tabcontent">
            <h3>Antorus, der brennende Thron</h3>
            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('antorus')">
                <div class="skillbar-title" style="background: #a09797;"><span>Antorus hc</span></div>
                <div class="skillbar-bar" style="background: #179c4a;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('antorus')">
                <div class="skillbar-title" style="background: #a09797;"><span>Antorus nhc</span></div>
                <div class="skillbar-bar" style="background: #179c4a;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <h3>Grabmal des Sageras</h3>
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('grab')">
                <div class="skillbar-title" style="background: #a09797;"><span>Grabmal hc</span></div>
                <div class="skillbar-bar" style="background: #F3FE24;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('grab')">
                <div class="skillbar-title" style="background: #a09797;"><span>Grabmal nhc</span></div>
                <div class="skillbar-bar" style="background: #F3FE24;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <h3>Nachtfestung</h3>
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('nachtfestung')">
                <div class="skillbar-title" style="background: #a09797;"><span>Nachtfestung hc</span></div>
                <div class="skillbar-bar" style="background: ##6EFFFF;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('nachtfestung')">
                <div class="skillbar-title" style="background: #a09797;"><span>Nachtfest. nhc</span></div>
                <div class="skillbar-bar" style="background: ##6EFFFF;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <h3>Prüfung der Tapferkeit</h3>
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('trials')">
                <div class="skillbar-title" style="background: #a09797;"><span>Trials hc</span></div>
                <div class="skillbar-bar" style="background: #f85d03;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('trials')">
                <div class="skillbar-title" style="background: #a09797;"><span>Trials nhc</span></div>
                <div class="skillbar-bar" style="background: #f85d03;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <h3>Smaragdgrüner Alptraum</h3>
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('smaragd')">
                <div class="skillbar-title" style="background: #a09797;"><span>Alptraum hc</span></div>
                <div class="skillbar-bar" style="background: #561256;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('smaragd')">
                <div class="skillbar-title" style="background: #a09797;"><span>Alptraum nhc</span></div>
                <div class="skillbar-bar" style="background: #561256;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

        </div>

        <div id="kader" class="tabcontent">
            <script>
            //AJAX Select
                "use strict"
                //Abrufen der Daten per AJAX
                let member = new XMLHttpRequest();
                    member.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            let data = JSON.parse(this.responseText);
                            tabellenBauen(data);
                        }
                }
                member.open("GET", "php/select.php", true);
                member.send();

            </script>
            <div id="kader_container">
                <div class="kader" id="tanks">
                    <h4>Tanks</h4>                    
                    <table id="table_tanks"></table>
                </div>
                <div class="kader" id="heals">
                    <h4>Heals</h4>
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
            <h3>Informationen</h3>
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
            Die Links findest du hier: <br>	<br>

            Raider.io <br>
            WarcraftLogs <br>
            Soooo... jetzt weißt du aber wirklich so gut wie alles. <br>
            Also wenn du uns jetzt immernoch kennenlernen willst, dann zögere nicht und schreibe einen unserer Offiziere inGame an: <br>
            </p>
        </div>        
    </div>
    <!-- Raids Ende -->
    <div class="parallax" id="para_mythic">
        <h3>Mythic Plus Paralax</h3>
    </div>

    <!-- Mythic Plus-->
    <div class="section" id="mythic">
        <div class="card_container">      
            <!-- Erstes Affix -->  
            <div class="card">
                <input type="checkbox" name="">
                <div class="toggle"></div>
                <div class="imgBox">
                    <img src="css/img/logo.png" alt="">
                </div>
                <div class="content">
                <h3 id="content_head_one"></h3>
                    <p id="content_one"></p>
                </div>
            </div>

            <!-- Zweites Affix -->
            <div class="card">
                <input type="checkbox" name="">
                <div class="toggle"></div>
                <div class="imgBox">
                    <img src="css/img/logo.png" alt="">
                </div>
                <div class="content">
                <h3 id="content_head_two"></h3>
                    <p id="content_two"></p>
                </div>
            </div>

            <!-- Drittes Affix -->
            <div class="card">
                <input type="checkbox" name="">
                <div class="toggle"></div>
                <div class="imgBox">
                    <img src="css/img/logo.png" alt="">
                </div>
                <div class="content">
                <h3 id="content_head_three"></h3>
                    <p id="content_three"></p>
                </div>
            </div>

            <!-- Viertes Affix -->
            <div class="card">
                <input type="checkbox" name="">
                <div class="toggle"></div>
                <div class="imgBox">
                    <img src="css/img/logo.png" alt="">
                </div>
                <div class="content">
                <h3 id="content_head_four"></h3>
                    <p id="content_four"></p>
            </div>
            <!--###################################### -->
        </div>
    </div>
        <div class="scores">
            <!-- Scoretabelle -->
            <div id="tabelle">
                <th>
                    <td>Name</td>
                    <td>Realm</td>
                    <td>Score</td>
                </th>

            </div>
        </div>
    </div>


    </div>
    <!-- Mythic Plus ENDE-->
    <div class="parallax" id="para_kontakt">
        <h3>Kontakt</h3>
    </div>
    <!-- Kontakt -->
    <div class="section" id="kontakt">
        <h3>Wir suchen dich...</h3>
        <p>Du hast gefallen an unsere Gilde gefunden und willst uns kennenlernen? <br>
            Dann schreibe uns einfach hier eine Nachricht oder besuche uns auf unserem Discord-Server.
        </p>
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>
    </div>
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4">
            <header class="w3-container w3-teal"> 
            <span onclick="document.getElementById('id01').style.display='none'" 
            class="w3-button w3-display-topright">&times;</span>
            <h2>Log In</h2>
            </header>
            <div class="w3-container" id="modal_container">
            <!-- Log in Form -->
            <form id="login_form" action="?login=1" method="POST">
                <!-- Log in Name-->
                <label for="fname">Name</label>
                <input type="text" id="name" name="username" placeholder="Dein Name..">
                <!-- Log in Passwort-->
                <label for="fname">Name</label>
                <input type="password" id="password" name="passwort">
                <input type="submit" value="Submit">
            </form>
            </div>
            <footer class="w3-container w3-teal">
            <p>Bitte Usernamen und Passwort eingeben</p>
            </footer>
        </div>
    </div>
    <!--Footer -->

<script>

var modal = document.getElementById('id01');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

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
</script>
</body>
</html>