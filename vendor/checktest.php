<?php
    include('../db.php');
    
    
    print_r($_POST);
    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $a4 = $_POST['a4'];
    $a5 = $_POST['a5'];
    $kol = $_POST['kol'];
    $name = $_POST['name'];
    $stroke = '';
    // SELECT `q1` FROM `getasxxz`
    for ($i = 1; $i <= $kol; $i++) {
        $stroke = $stroke.' '.$_POST["t$i"];
    }
    // $a1p = $db->query("SELECT `q1` FROM `getasxxz`");
    echo $stroke;
    echo '<br>';
    // prnt_r($a1p);


    $names = $db->query("SELECT * FROM `$name`");
    $names = mysqli_fetch_all($names);

    foreach($names as $nam) {
        $na1 = $nam[2];
        $na2 = $nam[4];
        $na3 = $nam[6];
        $na4 = $nam[8];
        $na5 = $nam[10];
        $na6 = $nam[12];

        $massa = explode(" ", $nam[12]);

        if ($a1 == $na1) {
            $prov1 = 'Верно';
        }else{
            $prov1 = 'Не верно';
        }
        echo $prov1;
        echo '<br>';

        if ($a2 == $na2) {
            $prov2 = 'Верно';
        }else{
            $prov2 = 'Не верно';
        }
        echo $prov2;
        echo '<br>';

        if ($a3 == $na3) {
            $prov3 = 'Верно';
        }else{
            $prov3 = 'Не верно';
        }
        echo $prov3;
        echo '<br>';

        if ($a4 == $na4) {
            $prov4 = 'Верно';
        }else{
            $prov4 = 'Не верно';
        }
        echo $prov4;
        echo '<br>';

        if ($a5 == $na5) {
            $prov5 = 'Верно';
        }else{
            $prov5 = 'Не верно';
        }
        echo $prov5;
        echo '<br>';
        

        
        

        echo $na1;
        echo '<br>';
        echo $na2;
        echo '<br>';
        echo $na3;
        echo '<br>';
        echo $na4;
        echo '<br>';
        echo $na5;
        echo '<br>';
        echo $na6;
        echo '<br>';

        // $str5 = explode(" ", $nam[15]);
        // $str6 = explode(" ", $nam[16]);
        // print_r($str5);
        // echo ($str6[1]);
    }
    
    $massb = explode(" ", $stroke);
    print_r($massb);
    echo count($massb);
    echo '<br>';
    $amouttruetree = 0;
    for ($i = 0; $i <= count($massb); $i++) {
        for ($j = 0; $j <= count($massa); $j++) {
            if($massa[$j] == $massb[$i] and $massb[$i]>0) {
                $amouttruetree++;
            }
        }
    }
    // echo $amouttruetree;
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = date("Y-m-d H:m:s");


        $db->query("INSERT INTO `score` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6all`, `q6`, `ball5`, `ball6`, `ip`, `datatime`) VALUES (NULL, '$prov1', '$prov2', '$prov3', '$prov4', '$prov5', '3', '$amouttruetree', '99', '99', '$ip', '$date')");
        $db->close();
        header('Location: ../index.php');
    
    // Array ( [a1] => 1 [a2] => 2 [a3] => 3 [a4] => 4 [a5] => 2 [t1] => 1 [t3] => 3 )