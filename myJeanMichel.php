<?
    session_start();
    require_once './classes/User.php';
    require_once './templates/navbar.php';

    $myJeanMichel = Request::findUser($_SESSION['username']);

    echo "~~~~~~~~~~~~~~~";
    echo '<br/>';
    echo $myJeanMichel['username'];
    echo '<br/>';
    echo $myJeanMichel['name'];
    echo '<br/>';
    echo "~~~~~~~~~~~~~~~";
?>