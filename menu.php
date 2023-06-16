<ul>
                        <!--zone de recherhce a insere ici-->
    <li><input type="search"class="searchinput" name="" id=""></li>
    <div class="lien">
        <li><a href="./index.php#baniere" class="active" ">Acceuil</a></li>
        <li><a href="./a_propos.php" >A propos </a></li>
        <li><a href="./avis.php" >Avis</a></li>
        <li><a href="./module.php" >Modules</a></li>
        <li><a href="./contact.php" >Contact</a></li>
        <?php if(!isset($_SESSION['id'])){?>
            <li><a href="./inscription.php" >Inscription</a></li>
            <?php }?>
        <?php if(isset($_SESSION['id'])){?>
            <li><a href="./deconection.php" >Deconection</a></li>
            <?php }?>
    </div>
</ul>