<?
    include('../classes/User.php');
    session_start();

    /*
        Ce controller nous permet de nous connecter en vérifiant les infos transmises en POST. On créé une
        variable qui contient le return de Request::findUser qui est égal à "false" si l'utilisateur n'est
        pas trouvé, et qui est égal à l'utilisateur s'il est trouvé. Ensuite, on vérifie simplement si les
        paramètres entrés sont ceux que l'on attend depuis notre DB ou non. Si tout est bon on créé une 
        variable $_SESSION['connected'] qui nous servira notamment à afficher certaines parties du menu.
    */
    
    $registeredUser = Request::findUser($_POST['username']);

    if($registeredUser) {
        if($_POST['username'] == $registeredUser['username'] && $_POST['password'] == $registeredUser['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['connected'] = 1;
            header('Location: ../index.php');

        } else {
            $message = 'utilisateur ou mot de passe incorrect';
            
            session_destroy();
            header("Location: ../login.php?message=".urlencode($message));
        }
    } else {
        $message = 'utilisateur ou mot de passe incorrect';
            
        session_destroy();
        header("Location: ../login.php?message=".urlencode($message));
    }
?>