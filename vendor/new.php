<?php
include('../db.php');

$name = $_POST['name'];

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];

$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$a5 = $_POST['a5'];

$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$t3 = $_POST['t3'];



$k = 1;
$i = 1;
while($_POST["v$i"] != '') {
    echo $_POST["v$i"];
    $i++;
    echo '<br>';
}
echo $i-1;
echo '<br';
// $sql = "CREATE TABLE `$name` (
//     `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     `q1` VARCHAR(255) NOT NULL,
//     `a1` INT(100) NOT NULL,
//     `q2` VARCHAR(255) NOT NULL,
//     `a2` INT(100) NOT NULL,
//     `q3` VARCHAR(255) NOT NULL,
//     `a3` VARCHAR(31) NOT NULL,
//     `q4` VARCHAR(255) NOT NULL,
//     `a4` VARCHAR(255) NOT NULL,
//     `q5` VARCHAR(255) NOT NULL,
//     `a5` INT(11) NOT NULL,
//     `q6` VARCHAR(255) NOT NULL,
//     `a6` VARCHAR(255) NOT NULL,
//     `b1` INT(11) NOT NULL,
//     `b2` INT(11) NOT NULL,
//     `status` TINYINT(2) NULL
//     )";

// if ($db->query($sql) === TRUE) {
//     echo "Таблица MyGuests создана успешно";
//  } else {
//     echo "Ошибка создания таблицы: " . $db->error;
// }


$tfull = $t1 . ' ' . $t2 . ' ' . $t3 . ' ';
echo $q1 . ' ' . $q2 . ' ' . $q3 . ' ' . $q4 . ' ' . $q5 . ' ' . $q6 . '<br>' ;
echo $a1 . ' ' . $a2 . ' ' . $a3 . ' ' . $a4 . ' ' . $a5 . '<br>' ;

echo $tfull;

// $db->query("INSERT INTO `{$name}` (`id`, `q1`, `a1`, `q2`, `a2`, `q3`, `a3`, `q4`, `a4`, `q5`, `a5`, `q6`, `a6`, `b1`, `b2`, `status`) VALUES (NULL, '$q1', '$a1', '$q2', '$a2', '$q3', '$a3', '$q4', '$a4', '$q5', '$a5', '$q6', '$tfull', '99', '99', NULL)");
    $db->query();



print_r($_POST);
echo $t1;
echo $t3;
echo $tfull;
echo '<br>';
echo '<br>';
echo '<br>';
