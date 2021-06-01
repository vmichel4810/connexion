<header>
    <?php session_start();?>
    <nav>
        <ul>
            <li class="w"><a href="./users.php">Tableau</a></li>
            <li class="w"><a href="./form.php">Formulaire</a></li>
            <li class="w"><a href="./index.php">Accueils</a></li>
            <?php if(empty($_SESSION['pseudo']) && empty($_SESSION['mdp'])):?>
                <li><a href="./connexion.php">connexion</a></li>
            <?php endif?>
            <ul class="dropDown">
                <?php if(isset($_SESSION['pseudo'])):?>
                    <li class="button-der">Bonjour <?php echo $_SESSION['pseudo']?></li>
                    <li class="dropdown-child" class="li"><a href="./controller/deconnexion.php">deconnexion</a></li>
                <?php endif?>
            </ul>
        </ul>               
    </nav>
</header>
            
            