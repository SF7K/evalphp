<?
    include('../classes/User.php');
    session_start();

    /*
        Ici on passe nos $_POST en $_SESSION pour pouvoir les manipuler sur plusieurs pages.
        On cherche au sein de notre DB si le username entré est trouvable via Request::findUser()
        S'il l'est : on retourne un message sur la page register, sinon on entre bien le nouvel 
        utilisateur dans notre DB en faisant appel à la méthode "createUser" du trait Request 
        lui-même appelé par l'include de User.php.
    */

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['password'] = $_POST['password'];

    if(Request::findUser($_SESSION['username']) == true) {
        $username = $_SESSION['username'];
        $message = $username. " est déjà utilisé, veuillez en choisir un autre <strong>username</strong>.";

        echo 'ça marche quand même';

        session_destroy();
        header("Location: ../register.php?message=".urlencode($message));
    } else {
        $_SESSION['connected'] = true;
        echo 'rip';

        Request::createUser($_SESSION['username'], $_SESSION['name'], $_SESSION['password']);
        header('Location: ../index.php');
    };
?>