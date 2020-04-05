<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
 
if(isset($_GET['login'])) {
    $username = $_POST['username'];
    $passwort = $_POST['password'];

    echo $username;

    $statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $result = $statement->execute(array('username' => $username));
    $user = $statement->fetch();
    
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['password'])) {
        $_SESSION['userid'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>');
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }
}
?>
<!DOCTYPE html> 
<html> 
<head>
 
  <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/w3.css" />
    <link rel="icon" type="image/png" href="css/img/favicon.png" sizes="32x32">

</head> 
<body>
 
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
 
<form action="?login=1" method="post">

Username:<br>
<input type="text" size="40" maxlength="250" name="username" autocomplete="off" value="Subbi"><br><br>

Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="password" value="" autocomplete="off"  id="pwInput"><div class="test" onclick="showPasswort()" value="Kalender85">SHOW</div><br>
 
<input type="submit" value="Abschicken">
</form> 

<script>
    function showPasswort(){
        var pwInput = document.getElementById('pwInput');
        console.log(pwInput.value);
        if (pwInput.type == 'password' ) { 
            pwInput.type = 'text';
	  }
	  else {
	        pwInput.type = 'password';
	  }
    }
</script>
</body>
</html>