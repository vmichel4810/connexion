<header>
    <?php session_start();?>
    <nav>
        <ul>
            <li class="w"><a href="./users.php">Tableau</a></li>
            <li class="w"><a href="./form.php">Formulaire</a></li>
            <li class="w"><a href="./index.php">Accueils</a></li>
            <?php if(isset($_SESSION['pseudo'])): ?><li class="w"><a href="/pageConected.php">Pages</a></li><?php endif ?>
            <?php if(empty($_SESSION['pseudo']) && empty($_SESSION['mdp'])):?>
                <li class="w"><a href="./connexion.php">connexion</a></li>
                <?php else :?>
                    <!-- <ul class="dropDown"> -->
                    <li class="button-der" class="w">Bonjour <?php echo $_SESSION['pseudo']?>
                        <li class="dropdown-child" class="w" class="li"><a href="./controller/deconnexion.php">deconnexion</a></li>
                    </li>
                    
                    <?php endif ?>
                    <!-- </ul> -->
        </ul>               
    </nav>
</header>
            
            