<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=guild', 'root', '');
 
if(isset($_GET['login'])) {
    $loginname = $_POST['loginname'];
    $passwort = $_POST['passwort'];
    
    $statement = $pdo->prepare("SELECT * FROM userdata WHERE name = :loginname");
    $result = $statement->execute(array('loginname' => $loginname));
    $user = $statement->fetch();
    
    //Überprüfung des Passworts
    if ($user !== false && $passwort == $user['passwort']) {
        $_SESSION['user'] = $user['name'];
        die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>');
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }
}
?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Login</title>    
</head> 
<body>
 
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}

?>

 
<form action="?login=1" method="post" >
E-Mail / Username :<br>
<input type="text" size="20" maxlength="50" name="loginname" autocomplete="off" value="Admin"><br><br>
 
Dein Passwort:<br>
<input type="password" size="20"  maxlength="50" name="passwort" autocomplete="off" value="OrderAndChaos"><br>
 
<input type="submit" value="Abschicken">
</form> 

<a href="login.php">Zum Login </a>
</body>
</html>