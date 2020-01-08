<?php
session_start();
if(!isset($_SESSION['user'])) {die('Bitte zuerst <a href="login.php">einloggen</a>');}

//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['user'];
$pdo = new PDO('mysql:host=localhost;dbname=guild', 'root', '');
$sql = " SELECT * FROM members";

//
$data=array();
foreach ($pdo->query($sql) as $row) {
   $data[]=$row;
   echo $row["charname"];
   echo "<br>";
}

echo json_encode($data);
echo "Hallo User: ".$userid;
?>


<html>
    <head>
        <script src="js/admin.js" defer></script>
    </head>
        <a href="logout.php">Zum Logout </a>
    <?php
        if(!isset($SESSION['user'])){
            echo "<button onclick='test()'>Test</button>;";
        }
    ?>
    <div id="memberList">
        <?php
            for ($i=0; $i<10; $i++){
                $count = $i+1;
                echo "<div id='$i' class='member' onclick='del($i)'><span id='span'>
                        Einheit $count</span></div>";
            }
        ?>
    </div>
</html>