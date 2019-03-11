<?php
//Verbindungsdaten der SQL-Datenbank
$server = "localhost";
$user ="root";
$password = "";
$dbname ="gilde";

$conn = new mysqli($server, $user, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order and Chaos  - Landing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/tabs.css" />
    <script src="main.js"></script>
    <script src="script.js"></script>
</head>
<body>
<div id="wrapper"><!--Wrapper Anfang-->
    <div class="section" id="header">
    <div class="container">
            <img src="css/img/wappen_middle.png" alt="css/img/wappen_small.png" id="titlepic">
            <h1>Order and Chaos</h1>
            <div class="color-overlay"></div>
        </div>
    </div> <!-- Ende Header-->
    <nav>
        <ul>
            <li><a href="#home"> Home</a></li>
            <li><a href="#aboutUs"> Über Uns</a></li>
            <li><a href="#raids"> Raids</a></li>
            <li><a href="#mythic"> Mythic</a></li>
        </ul>
    </nav><!-- Ende Navbars-->
    <div class="section" id="home">
        <h3>Home</h3>
        
    </div> <!-- Ende Home-->
    <div class="section" id="aboutUs">
        <div id="desc"> <!--  CONTAINER -->
            <div id="box-1">
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
            <div id="box-2">
                <img src="css/img/test.jpg" alt="css/img/test.jpg" width="90%" height="400px" margin-left="10px" id="title">
            </div>
        </div>  <!--  CONTAINER ENDE-->
    </div> <!-- Ende aboutUs-->

    
<div class="section" id="raids">
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'bfa')"  >BfA</button>
        <button class="tablinks" onclick="openTab(event, 'legion')" >Legion</button>
        <button class="tablinks" onclick="openTab(event, 'member')" id="defaultOpen" >Raidkader</button>
        <button class="tablinks" onclick="openTab(event, 'infos')"> Infos</button>
    </div>
    <div id="bfa" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <h3>Battle for Azeroth</h3>
        <!-- Flexbox 1-->

        <div id="slider">
            Hier werden bilder hinkommen!


        </div>
        <div id="raid-1"><!-- Raid-1 Box -->
            <p>
                Schlacht um Dazar'Alor
            </p>
            <div class="skillbar clearfix " id="bla" data-percent="100%">
                <div class="skillbar-title" style="background: #a09797;"><span>Dazar'Alor</span></div>
                <div class="skillbar-bar" style="background: #C5534F;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="90%">
                <div class="skillbar-title" style="background: #a09797;"><span>Dazar'Alor (hc)</span></div>
                <div class="skillbar-bar" style="background: #964946;"></div>
                <div class="skill-bar-percent">8/9</div>
            </div> <!-- End Skill Bar -->                
            
            <div class="skillbar clearfix " data-percent="15%">
                <div class="skillbar-title" style="background: #a09797;"><span>Dazar'Alor (m)</span></div>
                <div class="skillbar-bar" style="background: #964946;"></div>
                <div class="skill-bar-percent">1/9</div>
            </div> <!-- End Skill Bar -->  
        <!-- ###############################################################################################################-->
            <p>
                Uldir
            </p>                   
            <div class="skillbar clearfix " data-percent="100%">
                <div class="skillbar-title" style="background: #a09797;"><span>Uldir (nhc)</span></div>
                <div class="skillbar-bar" style="background: #C5534F;"></div>
                <div class="skill-bar-percent">7/7</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%">
                <div class="skillbar-title" style="background: #a09797;"><span>Uldir (hc)</span></div>
                <div class="skillbar-bar" style="background: #964946;"></div>
                <div class="skill-bar-percent">7/7</div>
            </div> <!-- End Skill Bar -->
        </div> <!-- Raid-1 Box ENDE -->
    </div><!-- ENDE BfA -->

    <div id="legion" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <p>
            Alptraum
        </p>
        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #a09797;"><span>Alptraum</span></div>
            <div class="skillbar-bar" style="background: #C5534F;"></div>
            <div class="skill-bar-percent">8/8</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #a09797;"><span>Alptraum (hc)</span></div>
            <div class="skillbar-bar" style="background: #964946;"></div>
            <div class="skill-bar-percent">8/8</div>
        </div> <!-- End Skill Bar -->                
        
        <!--###################################################################################-->
        <p>
            Prüfung der Tapferkeit
        </p>
        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #a09797;"><span>ToV</span></div>
            <div class="skillbar-bar" style="background: #C5534F;"></div>
            <div class="skill-bar-percent">8/8</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #a09797;"><span>ToV (hc)</span></div>
            <div class="skillbar-bar" style="background: #964946;"></div>
            <div class="skill-bar-percent">8/8</div>
        </div> <!-- End Skill Bar -->                
        <!--###################################################################################-->
        <p>
            Nachtfestung
        </p>
        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #a09797;"><span>Nachtfestung</span></div>
            <div class="skillbar-bar" style="background: #C5534F;"></div>
            <div class="skill-bar-percent">8/8</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #a09797;"><span>Nachtfest. (hc)</span></div>
            <div class="skillbar-bar" style="background: #964946;"></div>
            <div class="skill-bar-percent">8/8</div>
        </div> <!-- End Skill Bar -->                
        <!--###################################################################################-->
        <p>
            Tomb of Sageras
        </p>
        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #a09797;"><span>ToS</span></div>
            <div class="skillbar-bar" style="background: #C5534F;"></div>
            <div class="skill-bar-percent">8/8</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #a09797;"><span>ToS (hc)</span></div>
            <div class="skillbar-bar" style="background: #964946;"></div>
            <div class="skill-bar-percent">8/8</div>
        </div> <!-- End Skill Bar -->                
        <!--###################################################################################-->
        <p>
            Antorus, der brennende Thron
        </p>
        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #a09797;"><span>Antorus</span></div>
            <div class="skillbar-bar" style="background: #C5534F;"></div>
            <div class="skill-bar-percent">8/8</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #a09797;"><span>Antorus (hc)</span></div>
            <div class="skillbar-bar" style="background: #964946;"></div>
            <div class="skill-bar-percent">8/8</div>
        </div> <!-- End Skill Bar -->                
        <!--###################################################################################-->
    </div>
        
    <div id="member" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <h3>Unsere Member</h3>

    <?php
        //Tank Statement
        $sql_tank=" SELECT * FROM member as m
                    INNER JOIN classes as c ON m.class = c.id
                    WHERE  role='tank'";

        $result_tank= mysqli_query($conn, $sql_tank);
        echo '<table>';
        while ($zeile = mysqli_fetch_assoc($result_tank))
        {
        echo "<tr>";
        echo "<td>". $zeile['charname'] . "</td>";
        echo "<td>". $zeile['realm'] . "</td>";
        echo "<td>". $zeile['name'] . "</td>";
        echo "</tr>";
        }
        echo "</table> <br>";
        //##########################################################################

        //Heal Statement
        $sql_heal=" SELECT * FROM member as m
                    INNER JOIN classes as c ON m.class = c.id
                    WHERE  role='heal'";

        $result_heal= mysqli_query($conn, $sql_heal);
        echo '<table>';
        while ($zeile = mysqli_fetch_assoc($result_heal))
        {
        echo "<tr>";
        echo "<td>". $zeile['charname'] . "</td>";
        echo "<td>". $zeile['realm'] . "</td>";
        echo "<td>". $zeile['name'] . "</td>";
        echo "</tr>";
        }
        echo "</table> <br>";
        //##########################################################################

        //Melee Statement
        $sql_melee=" SELECT * FROM member as m
                    INNER JOIN classes as c ON m.class = c.id
                    WHERE  role='melee'";

        $result_melee= mysqli_query($conn, $sql_melee);
        echo '<table>';
        while ($zeile = mysqli_fetch_assoc($result_melee))
        {
        echo "<tr>";
        echo "<td>". $zeile['charname'] . "</td>";
        echo "<td>". $zeile['realm'] . "</td>";
        echo "<td>". $zeile['name'] . "</td>";
        echo "</tr>";
        }
        echo "</table> <br>";
        //##########################################################################

        //Ranged Statement
        $sql_ranged=" SELECT * FROM member as m
        INNER JOIN classes as c ON m.class = c.id
        WHERE  role='ranged'";

        $result_ranged= mysqli_query($conn, $sql_ranged);
        echo '<table>';
        while ($zeile = mysqli_fetch_assoc($result_ranged))
        {
        echo "<tr>";
        echo "<td>". $zeile['charname'] . "</td>";
        echo "<td>". $zeile['realm'] . "</td>";
        echo "<td>". $zeile['name'] . "</td>";
        echo "</tr>";
        }
        echo "</table> <br>";
        //##########################################################################

    ?>
    </div>

    <div id="infos" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <p>
            Wow, du hast dir bisher alles auf dieser Seite angeschaut und bist immernoch nicht weggerannt? Respekt! <br>
            Was? Du hast sogar ernsthaftes Interesse mit uns raiden zu gehen? Cool, hier gibt's noch weitere Informationen für dich: <br>
            Unsere aktuellen <b>Raidzeiten</b> sind:
            <br><br>
                Montag, 20:30-22.00 <br>
                Mittwoch, 20:30-22.00

        </p>
        <p>
            Aktuell legen wir montags immer die Bosse, die vom Mittwoch "übrig geblieben sind". Es soll sich ja auch niemand vernachlässigt fühlen. <br>
            Sollten wir in einer Woche schon am Mittwoch mit allem fertig sein, überlegen wir uns in der Regel etwas als Alternativplan. Was das dann ist? <br>
            Wieder eine sehr gute Frage. Also der Alternativplan kann sein, dass man einen Twinkrun macht, ggf. Timewalks geht oder eben M+. Wichtig ist uns, dass <br>
            wir trotzdem was <b>gemeinsam</b> machen. <br> <br>
            Ach fast hätten wir noch was wichtiges vergessen: Unsere Links zu Raider.io und natürlich unsere Logs, die du dir gern mal anschauen kannst, um dir ein Bild zu machen. <br>
            Die Links findest du hier:
        </p>
            <ul>
                <li><a href="https://raider.io/guilds/eu/anetheron/Order%20and%20Chaos" target="_blank">Raider.io</a> </li>
                <li><a href="https://www.warcraftlogs.com/guild/calendar/304372/" target="_blank"> WarcraftLogs </a></li>
            </ul>
        <p>
            Soooo... jetzt weißt du aber wirklich so gut wie alles. <br>
            Also wenn du uns jetzt immernoch kennenlernen willst, dann zögere nicht und schreibe einen unserer Offiziere inGame an:
            <ul>
                <li>Kreischi - Nathrezim</li>
                <li>Ginflut - Anetheron</li>
                <li>Gefearfach - Anetheron</li>
                <li>Hauie - Anetheron</li>
                <li>Tack - Gul'dan</li>
                <li>Subbi - Anetheron</li>
            </ul>
        </p>
        </div><!-- Ende TabContent-->
    </div> <!-- Ende Raids-->
    <div class="section" id="mythic">
    <div id="affix_container">
        <!--Erstes Affix-->
        <div class="affixContent">
            <div class="affix" id="affixOne"></div> <br> <br> <br>
            <span class="affixText" id="affixOneText"></span>
        </div>
        <!--Zweites Affix-->
        <div class="affixContent">
            <div class="affix" id="affixTwo"></div> <br> <br> <br>
            <span class="affixText" id="affixTwoText"></span>
        </div>
        <!--Drittes Affix-->
        <div class="affixContent">
            <div class="affix" id="affixThree"></div> <br> <br><br>
            <span class="affixText" id="affixThreeText"></span>
        </div>
        <!--Viertes Affix-->
        <div class="affixContent">
            <div class="affix" id="affixFour"></div> <br> <br> <br>
            <span class="affixText" id="affixFourText"></span>
        </div>
    </div>

    <!-- Tabelle zur Ausgabe der M+ Scores-->
    <!-- Muss noch dynamisch in JS function ausgelagert werden-->
    <table>




        <tr>
            <th>Name</th> <th>Realm</th> <th>Score</th>
        </tr>
        <tr>
            <td>Kreischi</td> <td>Nathrezim</td> <td>1100</td>
        </tr>
        <tr>
            <td>Kreischi</td> <td>Nathrezim</td> <td>1000</td>
        </tr>        
        <tr>
            <td>Kreischi</td> <td>Nathrezim</td> <td>900</td>
        </tr>
        <tr>
            <td>Kreischi</td> <td>Nathrezim</td> <td>800</td>
        </tr>
        <tr>
        <td>Kreischi</td> <td>Nathrezim</td> <td>1100</td>
        </tr>
        <tr>
            <td>Kreischi</td> <td>Nathrezim</td> <td>1000</td>
        </tr>        
        <tr>
            <td>Kreischi</td> <td>Nathrezim</td> <td>900</td>
        </tr>
        <tr>
            <td>Kreischi</td> <td>Nathrezim</td> <td>800</td>
        </tr>
        <tr>
        <td>Kreischi</td> <td>Nathrezim</td> <td>1100</td>
        </tr>
        <tr>
            <td>Kreischi</td> <td>Nathrezim</td> <td>1000</td>
        </tr>        
    </table>
    </div> <!-- Ende Mythic-->
    <div class="section" id="footer">
        <ul id="footerUl">
            <li>Impressum ||</li>
            <li>Datenschutz ||</li>
            <li>Battle.net Link</li>
        </ul>
    </div> <!-- Ende Footer-->
</div><!--Wrapper Ende-->

<script>
"use strict";
    // Skillbar Animations
    $(document).ready(function(){
        $('.skillbar').each(function(){
            $(this).find('.skillbar-bar').animate({
                width:$(this).attr('data-percent')
            },3000);
        });
    });

    //TabContent Switch
    let openTab=(evt, cityName)=>{
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

</script>
</body>
</html>