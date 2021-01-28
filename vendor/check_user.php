<?php
    

    include('../db.php');
    setcookie('user_find', 0, time() + 3600, "/" );
    setcookie('card_find', 0, time() + 3600, "/" );
    $go = 1;
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRIPPED);
    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRIPPED);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRIPPED);
    $status = $_POST['status'];

    
    echo $login;
    $pass = md5($pass. "sdazlljhsdx321s1dwws1");
    echo $pass;

    $r = mysqli_query($db,"SELECT * FROM `users` WHERE `login` = '$login'");
    while( $u = mysqli_fetch_assoc($r)){
        setcookie('user_find', 1, time() + 3600, "/" );
        $go = 0;
    }


    if($go == 1 and $status == 2){
        $db->query("INSERT INTO `users` (`id`, `name`, `login`, `password`, `status`) VALUES (NULL, '$name','$login', '$pass', 2)");
        echo('DAAAAaa');
    }
    if($go == 1 and $status == 0){
        $db->query("INSERT INTO `users` (`id`, `name`, `login`, `password`) VALUES (NULL, '$name','$login', '$pass')");
        echo('kek');

    }

    $db->close();

    header('Location: ../register.php');
    ?>