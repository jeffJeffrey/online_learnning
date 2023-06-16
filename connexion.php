<?php
include('session.php');
require('./fonction.php');
if (isset($_POST['submit'] )) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $db = openConnection();
    $sql = "SELECT * FROM etudiants WHERE email = '$email'" ;
    $result=$db->prepare($sql);
    $result->execute() ;
    $user = $result->fetchAll();
    
    if($result->rowCount() > 0){
        $user = $user[0];
        $success = password_verify($password, $user['password']);

       if($success){

            $_SESSION['id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['niveau_id'] = $user['niveau_id'];
            $_SESSION['email'] = $user['email'];
            header("location: ./module.php");
       }
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./style/compte.css">
    <script src="hhttps://kit.fontawesome.com/de82e898a9" crossorigin="anonymous"></script>
    <style>
        .affiche{
            display: block;
        }
        .cacher{
            display: none;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="#" class="logo"><span>O</span>pen e-learning</a>
        <div class="form-box">
            <h1 id="title">Connexion</h1>
            <form  method ="POST" id="formLog">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email"  placeholder="email" name="email">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password"  placeholder="password" name="password">
                    </div>
                        
                    <p>Mot de passe oublier? <a href="#">cliquer Ici!</a></p>
                </div>

                <div class="btn-field">
                    <button name="submit" type="submit" id="btnCon"> Connexion</button>
                    <a href="./inscription.php">Inscription</a>
                </div>
            </form>
        </div>
    </div>

<script src="./javaScript/compte.js"></script>

</body>
</html>