<?php
    session_start();
    include('../db.php');


    setcookie('user', $user['login'], time() - 3600, "/" );
    unset($_SESSION["user"]);
    header('Location: ../index.php');
    

    