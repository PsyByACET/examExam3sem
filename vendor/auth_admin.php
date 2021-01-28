<?php
    session_start();
    include('../db.php');

    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRIPPED);

    // $id_card_f = $db->query("SELECT * FROM `patients` WHERE `login` = '$login'");
    //     while( $u = mysqli_fetch_assoc($id_card_f)){
    //         $id_card = $u['medical_card'];  
    //     }

    $name_user_f = $db->query("SELECT * FROM `patients` WHERE `login` = '$login'");
        while( $uu = mysqli_fetch_assoc($name_user_f)){
            $name_user = $uu['last_name'] .' '. $uu['first_name'] .' '. $uu['middle_name'];
            setcookie('user_id', $uu['patient_id'], time() + 3600, "/" );
            
        }

    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRIPPED);
    
    $pass = md5($pass. "sdazlljhsdx321s1dwws1");

    // $countt = $db->query("SELECT * FROM `patients` WHERE `login` = '$login' AND `password` = '$pass' AND `status` = 1");
    // $user = $countt->fetch_assoc();
    $countt = $db->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass' AND `status` = 3" );
    $user = $countt->fetch_assoc();

    if(count($user) == 0) {
        echo "пользователь не найден";
        exit();
    }

    setcookie('name_user', $name_user, time() + 3600, "/" );
    $_SESSION['user'] = $user['login'];
    $db->close();

    header('Location: ../adminstart.php');