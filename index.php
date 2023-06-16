<?php include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style/index.css">
        <script src="hhttps://kit.fontawesome.com/de82e898a9" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./style/fa.css">
        <title>Online-learning</title>
    </head>
    <body>
        <!--bar de navigation-->
        <header>
            <nav class="navbar">
                <a href="#" class="logo"><span>O</span>nline-learnning</a>
                <div class="nav-links">
                <?php include('menu.php');?>
                </div>
                <img src="./image/menu.png" alt="menu en burgers" class="menu-en-burgers">
            </nav>
            <!--acceuil banierre du sit-->
            <section class="banniere" id="banniere">
                <div class="contenu">
                    <h2> Profiter de tout nos Modules de cours...</h2>
                    <p>Le savoir est la clé du pouvoir quoi de mieux qu'un site qui vous fournit un prestatoire a la hauteur de vos attentes? alors, suivez nous! Notre site d'aprentissage en ligne va permettre aux utilisateurs <br> inscrits ou pas dans notre plate forme d'avoir 
            accès à  des cours,des ancients sujets,et des tutoriels en informatique  en fonction de son niveau academique.</p>
                    <a href="#modules" class="btn1">Matiere</a>
                    <a href="./a_propos.php" class="btn1">A propos</a>
                </div>
            </section>
        </header>
    
    
        <section class="modules" id="modules">
            <div class="titre">
                <h2 class="titre-texte"><span>M</span>odules</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
            </div>
            <div class="contenu">
                <div class="box">
                    <div class="imbox">
                        <a href="#">
                            <img src="./image/pc.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h3>Programmation C</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imbox">
                        <a href="#">
                            <img src="./image/se.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h3>Système d'exploitation</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imbox">
                        <a href="#">
                            <img src="./image/reseaux.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h3>Intro au Réseaux</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imbox">
                        <a href="#">
                            <img src="./image/sd.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h3>Structure de données</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imbox">
                        <a href="#">
                            <img src="./image/java.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h3>Programmation JAVA</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imbox">
                        <a href="#">
                            <img src="./image/pw.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h3>Programmation Web</h3>
                    </div>
                </div>
            </div>
            <div class="titre">
                <a href="#" class="btn1">Voir Plus</a>
            </div>
    
        </section>
    
        <section class="contact" id="contact"></section>
    </body>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footercol">
                    <h4> Apprentissage en ligne </h4>
                    <div class="fooli">
                        <ul>
                            <li><a href="#">A propos</a></li>
                            <li><a href="#"> Avis </a></li>
                            <li><a href="#">contact</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="footercol">
                    <h4>Aide</h4>
                    <div class="fooli">
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">shipping</a></li>
                            <li><a href="#">retuns</a></li>
                            <li><a href="#">orders status</a></li>
                            <li><a href="#">payment option</a></li>
                        </ul>
                    </div>
                   
                </div>
                <div class="footercol">
                    <h4>Nos cours</h4>
                   <div class="fooli">
                        <ul>
                            <li><a href="#">Reseaux</a></li>
                            <li><a href="#">System D'exploitation</a></li>
                            <li><a href="#">C++</a></li>
                            <li><a href="#">Java</a></li>
                            <li><a href="#">Structure de donne</a></li>
                            <li><a href="#">programmation web</a></li>
                        </ul>
                   </div>
                </div>
                <div class="footercol">
                    <h4>ecrivez nous!!</h4>
                    <div class="social.link">
                        <ul>
                            <li><a href="#">jeffjeffrey@gmail.com</a></li>
                            <li><a href="#">wilfriednecdem@gmail.com</a></li>
                            <li><a href="#">dongmo-junior@gmail.com</a></li>
                            <li><a href="#">patolyver@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <Script src="./javaScript/index.js"></Script>
</html>