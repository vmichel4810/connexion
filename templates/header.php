<header>
    <?php session_start();?>
    <nav>
        <ul class="ul">
            <li><a href="./users.php">Tableau</a></li>
            <!-- <li><a href="./form.php">Formulaire</a></li> -->
            <li><a href="./index.php">Accueils</a></li>
            <?php if(isset($_SESSION['pseudo'])): ?><li><a href="/pageConected.php">Pages</a></li><?php endif ?>
            <?php if(empty($_SESSION['pseudo']) && empty($_SESSION['mdp'])):?>
            <li><a href="./connexion.php">connexion</a></li>
            <?php else :?>
            <ul class="dropDown">
                <li class="button-der"><p class="w">Bonjour <?php echo $_SESSION['pseudo']?><p>
                <li class="dropdown-child"><a href="./controller/deconnexion.php">deconnexion</a></li>
                </li>
            </ul>                    
            <?php endif ?>
        </ul>               
    </nav>
</header>