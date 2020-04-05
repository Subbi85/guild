<?php 
session_start();
//include 'var.php';
$pdo = new PDO('mysql:host=localhost;dbname=guild', 'root', '');
?>
<!DOCTYPE html> 
<html> 
<head>
  <title>OaC - User Registrierung</title>    
</head> 
<body>
 
<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
    $error = false;
    //Variablen abholen
    $username =  $_POST['username'];
    $email = $_POST['email'];   
    $charname =  $_POST['charname'];
    $realm = $_POST['realm'];
    $passwort = $_POST['passwort'];
    $passwort2 = $_POST['confirm'];

    $errormessage ="";

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
        $errormessage = 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
        $error = true;
    } 

    if(strlen($passwort) == 0) {
        echo 'Bitte ein Passwort angeben<br>';
        $errormessage = 'Bitte ein Passwort angeben<br>';
        $error = true;
    }

    if($passwort != $passwort2) {
        echo 'Die Passwörter müssen übereinstimmen<br>';
        $errormessage = 'Die Passwörter müssen übereinstimmen<br>';
        $error = true;
    }
    
    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if(!$error) { 
        $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();
        
        if($user !== false) {
            echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
            $errormessage = 'Diese E-Mail-Adresse ist bereits vergeben<br>';
            $error = true;
        }    
    }
    
    //Überprüfe, dass der Username noch nicht registriert wurde
    if(!$error) { 
        $statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $result = $statement->execute(array('username' => $username));
        $user = $statement->fetch();
        
        if($user !== false) {
            echo 'Dieser Username ist bereits vergeben<br>';
            $errormessage = 'Diese E-Mail-Adresse ist bereits vergeben<br>';
            $error = true;
        }    
    }


    $group = "admin";
    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {    
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
        
        $statement = $pdo->prepare("INSERT INTO users (username, email, charname, realm, password, usergroup) 
                                    VALUES (:username, :email, :charname, :realm, :password, :usergroup)");
        $result = $statement->execute(array( 'username' => $username, 'email' => $email, 'charname'=>$charname, 'realm'=>$realm, 'password' => $passwort_hash, 'usergroup'=>$group ));

        if($result) {        
            echo 'Du wurdest erfolgreich registriert. <a href="login.php">Zum Login</a>';
            $showFormular = false;
        } else {
            echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
            echo $errormessage;
        }
    } 
}
 
if($showFormular) {
?>
    <!-- Registrierungsform -->
    <form action="?register=1" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" placeholder="Username" value="Lars"><br><br>

        <label for="mail">Mail: </label>
        <input type="email" name="email" placeholder="Mail" value="laschna@web.com"><br><br>

        <label for="charname">Charname: </label>
        <input type="text" name="charname" placeholder="charname" value="Subbi"><br><br>

        <label for="realm">Realm: </label>
        <input type="text" name="realm" placeholder="realm" value="Anetheron"><br><br>

        <label for="group">Usergruppe: </label>
        <select id="group" name="group">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

        <label for="passwort">Passwort: </label>
        <input type="text" name="passwort" placeholder="passwort" value="passwort" id="pw"><br><br>

        <label for="confirm">Bestätige Passwort: </label>
        <input type="text" name="confirm" placeholder="confirm" 
            value="passwort" id="pwc"><br><br>
        
        <input type="submit" value="Submit">
    </form>

<?php
} //Ende von if($showFormular)

/*
SQL Statement für die Tabelle:
CREATE TABLE users (
    id serial,
    username varchar(200) NOT NULL,
    usergroup varchar(200) NOT NULL,
    email varchar(200) NOT NULL,
    charname varchar(200) NOT NULL,
    realm varchar(200) NOT NULL,
    password varchar(200) NOT NULL,
    PRIMARY KEY(ID)
);

*/

?>
 
</body>
</html>