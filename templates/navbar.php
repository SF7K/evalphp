<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banque de Jean-MichelS !</title>
</head>

<header>
    <nav>
        <ul>
            <li><a href="./index.php">Accueil</a></li>
            <?
                if(isset($_SESSION['connected'])) {
                    ?>
                    <li><a href="./list.php">Liste des Jean-Michel</a></li>
                    <li><a href="./myJeanMichel.php">Mon Jean-Michel</a></li>
                    <li><a href="./controllers/disconnectUser.php">Se déconnecter</a></li>
                    <?
                } else {
                    ?>
                    <li><a href="./register.php">S'inscrire</a></li>
                    <li><a href="./login.php">Se connecter</a></li>
                    <?
                }
            ?>
            
        </ul>
    </nav>
</header>