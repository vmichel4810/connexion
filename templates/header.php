<header>
    <?php session_start();?>
    <nav>
        <ul>
            <li><a href="./users.php">Tableau</a></li>
            <li><a href="./form.php">Formulaire</a></li>
            <li><a href="./index.php">Accueils</a></li>
            <?php if(empty($_SESSION['pseudo'])):?><li><a href="./connexion.php">connexion</a></li><?php endif?>
            <?php if(isset($_SESSION['pseudo'])):?><li>Bonjour <?php echo $_SESSION['pseudo']?></li><?php endif?>
            <?php if(isset($_SESSION['pseudo'])):?><li><a href="./deconnexion.php">deconnexion</a></li><?php endif?>
                   
        </ul>
    </nav>
</header>
