<?php
    include('head.php');
    $name = $_GET['name'];
    $names = $db->query("SELECT * FROM `$name`");
    $names = mysqli_fetch_all($names);

    foreach($names as $nam) {
        $q1 = $nam[1];
        $q2 = $nam[3];
        $q3 = $nam[5];
        $q4 = $nam[7];
        $q5 = $nam[9];
        $q6 = $nam[11];

        $str5 = explode(" ", $nam[15]);
        $str6 = explode(" ", $nam[16]);
        print_r($str5);
        echo ($str6[1]);
        echo $_SESSION['user'];
        
    }
                   
?>
<section class="del_record_s" id="rec">
    <h1>ne admin</h1>
    <div class="container-md">
        <div class="alert alert-warning">
            <form method="POST" action="vendor/checktest.php">
                <h2>Название опроса</h2>
                <input class="form-control col-5" disabled required type="text" value="<?= $name ?>" name="name">
                <h2>Тип 1</h2>
                <input class="form-control col-5" required type="text" value="<?= $q1?>" disabled placeholder="Вопрос" name="q1">
                <input class="form-control col-5" required type="number" placeholder="Ответ" name="a1"> 
                
                <hr>

                <h2>Тип 2</h2>
                <input class="form-control col-5" required type="text" value="<?= $q2?>" disabled placeholder="Вопрос" name="q2">
                <input class="form-control col-5" required type="number" min="0" placeholder="Ответ" name="a2">  
                <hr>

                <h2>Тип 3</h2>
                <input class="form-control col-5" required type="text" value="<?= $q3?>" disabled placeholder="Вопрос" name="q3">
                <input class="form-control col-5" required type="text" maxlength="30" placeholder="Ответ" name="a3">  
                <hr>

                <h2>Тип 4</h2>
                <input class="form-control col-5" required type="text" value="<?= $q4?>" disabled placeholder="Вопрос" name="q4">
                <input class="form-control col-12" required type="text" maxlength="255" placeholder="Ответ" name="a4">  
                <hr>
                
                <h2>Тип 5</h2>
                <input class="form-control col-5" required type="text" value="<?= $q5?>" disabled placeholder="Вопрос" name="q5">
                <?php
                $y=0;
                while ($y++<2){
                    echo '
                    <p><input required name="a5" type="radio" value="'.$y.'">'.$y.'</p> 
                    <input class="form-control col-4" required type="text" placeholder="'.$str5[$y].'" disabled name="var'.$x.'">
                    ';
                } 
                ?>
                
                <hr>
                <h2>Тип 6</h2>
                <input class="form-control col-5" type="text" value="<?= $q6?>" disabled placeholder="Вопрос" name="q6">
                <?php
                $x=0;
                while ($x++<3){
                    echo '
                    <p><input type="checkbox" name="t'.$x.'" value="'.$x.'"><input class="form-control col-4" required type="text" placeholder="'.$str6[$x].'" disabled name="v'.$x.'"></p>
                    <input type="hidden" name="kol" value="'.$x.'">
                    <input type="hidden" name="name" value="'.$name.'">

                    ';
                } 
                ?>
                <!-- <p><input type="checkbox" name="t1" value="'1'"><input class="form-control col-4" required type="text" placeholder="n" name="v1"></p> -->
                <!-- <p><input type="checkbox" name="t2" value="'2'"><input class="form-control col-4" required type="text" placeholder="n" name="v2"></p>
                <p><input type="checkbox" name="t3" value="'3'"><input class="form-control col-4" required type="text" placeholder="n" name="v3"></p> -->
                <hr>
                
                <input type="submit" value="отправить">
            
            </form>
            
        </div>
    </div>
</section>
<?php
    include('foot.php');
?>