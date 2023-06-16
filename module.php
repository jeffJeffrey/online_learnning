<?php  
include('session.php');
require('loginVerif.php');
$niveau_id = $_SESSION['niveau_id'];
require('fonction.php');
$db = openConnection();
$sql = 'SELECT * FROM matieres WHERE niveau_id ='.$niveau_id;
$result=$db->prepare($sql);
$result->execute() ;
$result = $result->fetchAll();
$selected_cour = null;
if(isset($_GET['id_cour'])) {
    foreach($result as $cour){
        if($cour["id"]==$_GET['id_cour']){
            $selected_cour = $cour;

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
    <link rel="stylesheet" href="./style/module.css">
    <title>Module</title>
    <style>
        .affiche{
            display: block;
        }
        .cacher{
            display: none;
        }
    </style>
</head>
<body>
    <nav class="navbar">
            
        <div class="nav-links">
            <?php include('menu.php');?>
        </div>
        <img src="./image/menu.png" alt="menu en burgers" class="menu-en-burgers">
    </nav>


    <label for="">
        <div class="slide">
            <h1>COURS</h1>
            <div class="matiere">
                <ul>
                    <div class="mat">
                        <?php foreach($result as $row){?>
                            <li><a href="./module.php?id_cour=<?=$row['id']?>"><?=$row['libelle']?></a></li>
                        <?php } ?>
                    <div/>
                </ul> 
            </div>
        </div>
    </label>

    <div class="uv">
        <div class="menu">
            <ul>
                <li><a id="afficheCour" onclick="affichec()" href="#">Cours</a></li>
                <li><a id="afficheVideo" onclick="affichev()" href="#">Tutoriels</a></li>
                <li><a id="afficheEncienSujet" onclick="afficheas()" href="#">Ancien sujets</a></li>
            </ul>
        </div>
        <div class="dynamiqueSpace">
            <?php if(!is_null($selected_cour)){   ?> 
                <div class="cacher" id="video">
                    <?= $selected_cour['video']; ?>
                </div>
                <div class="cacher" id="cour">
                    <iframe width="1000" height="20000" src="./pdf/<?= $selected_cour['cour'];?>" frameborder="0"></iframe>
                </div>
                <div class="cacher" id="encienSujet">
                    <iframe width="1000" height="20000" src="./pdf/<?= $selected_cour['encien_sujet'];?>" frameborder="0"></iframe>
                </div>
            <?php  } ?> 
        </div>
    </div>
    <script>
        function affichec() {
            video.classList.add("cacher")
            video.classList.remove("affiche")

            cour.classList.add("affiche")
            cour.classList.remove("cacher")

            encienSujet.classList.add("cacher")
            
            encienSujet.classList.remove("affiche")
        }
        function affichev() {
            video.classList.add("affiche")
            video.classList.remove("cacher")

            cour.classList.add("cacher")
            cour.classList.remove("affiche")

            encienSujet.classList.add("cacher")
            
            encienSujet.classList.remove("affiche")
        }
        function afficheas() {
            video.classList.add("cacher")
            video.classList.remove("affiche")

            cour.classList.add("cacher")
            cour.classList.remove("affiche")

            encienSujet.classList.add("affiche")
            
            encienSujet.classList.remove("cacher")
        }
    </script>
</body>
</html>