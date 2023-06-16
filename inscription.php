<?php
include('session.php');
require('./fonction.php');
if (isset($_POST['submit'] )) {
    $nom = $_POST['nom'];
    $niveau = (int) $_POST['niveau'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $db = openConnection();
    $sql = "SELECT * FROM etudiants WHERE email = '$email' " ;
    $result=$db->prepare($sql);
    $result->execute() ;

    if($result->rowCount() > 0){
        echo "cet utilisateur existe deja" ;

    }
    else {
        $password = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO etudiants  (nom, niveau_id, email, password) VALUES ('$nom', $niveau, '$email', '$password') " ;
        $result=$db->prepare($sql);
        $result->execute();
        $sql2 = "SELECT * FROM etudiants WHERE email = '$email' AND password = '$password' AND nom = '$nom' AND niveau_id = '$niveau'";
        $result2=$db->prepare($sql2);
        $result2->execute();
        $id = $db->lastInsertId();
        $_SESSION['id'] = $id;
        $_SESSION['nom'] = $nom;
        $_SESSION['niveau_id'] = $niveau;
        $_SESSION['email'] = $email;
        header("location: ./module.php");
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./style/compte.css">
    <script src="hhttps://kit.fontawesome.com/de82e898a9" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <a href="#" class="logo"><span>O</span>pen e-learning</a>
        <div class="form-box">
            <h1 id="title">Inscription</h1>
            <form  method ="POST" id="formLog">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Nom" name="nom" id="name" onkeyup="verifNom()">
                    </div>
                    <div id="erreurnom"></div>
                    <div class="input-field" id="niveauField">
                        <i class="fa-solid fa-user"></i>
                        <input type="number" placeholder="Niveau L1/L2" name="niveau" id="niveau" onkeyup="verifNiveau()">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email"  placeholder="email" name="email" id="email" onkeyup="verifEmail()">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password"  placeholder="password" name="password">
                    </div>
                </div>
                <div class="btn-field">
                    <button name="submit" type="submit" id="btnIns"> S'inscrire</button>
                    <a href="./connexion.php">Connexion</a>
                </div>
            </form>
        </div>
    </div>

<script src="./javaScript/compte.js"></script>
<script src="./javaScript/inscription.js"></script>

</body>
</html>