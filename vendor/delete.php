<?php 
    include('../db.php');
    
    $name = $_GET['name'];

    $db->query("DELETE FROM `nametable` WHERE `nametable`.`name` = '$name'");
    
    $sql = "CREATE TABLE `$name` (
        `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `q1` VARCHAR(255) NOT NULL,
        `a1` INT(100) NOT NULL,
        `q2` VARCHAR(255) NOT NULL,
        `a2` INT(100) NOT NULL,
        `q3` VARCHAR(255) NOT NULL,
        `a3` VARCHAR(31) NOT NULL,
        `q4` VARCHAR(255) NOT NULL,
        `a4` VARCHAR(255) NOT NULL,
        `q5` VARCHAR(255) NOT NULL,
        `a5` INT(11) NOT NULL,
        `q6` VARCHAR(255) NOT NULL,
        `a6` VARCHAR(255) NOT NULL,
        `b1` INT(11) NOT NULL,
        `b2` INT(11) NOT NULL,
        `m5` VARCHAR(255) NOT NULL,
        `m6` VARCHAR(255) NOT NULL,
        `status` TINYINT(2) NULL
        )";
    
    if ($db->query($sql) === TRUE) {
        echo "Таблица MyGuests создана успешно";    
     } else {
        echo "Ошибка создания таблицы: " . $db->error;
    }

    $query ="DROP TABLE `$name`";
    $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "Удаление таблицы прошло успешно";
    }

    header('Location: ../admin.php');