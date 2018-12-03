<?php
session_start();
$server = "localhost";
$user ="root";
$password = "";
$dbname ="gilde";

$pdo = new PDO('mysql:host=localhost;dbname=gilde', 'root', '');
$pdo -> exec("SET CHARACTER SET utf8");
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="2; url=index.php">
</head>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?> <br>
your text <?php echo $_POST["mess"]; ?>


<?php
    $message = array();
    $message["charname"] = $_POST["name"];
    $message["email"] = $_POST["email"];
    $message["message"] = $_POST["mess"];


    $statement = $pdo->prepare("INSERT INTO notes (charname, email, message)
                                VALUES (:charname, :email ,:message )"); 
    $statement->execute($message); 
    echo "Nachricht wurde gespeichert"
?>

    Du wirst gleich zur Hauptseite geleitet.

</body>
</html>