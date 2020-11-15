<?
    session_start();
    require_once './classes/User.php';
    require_once './templates/navbar.php';

    Request::displayUsers();
?>