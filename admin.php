<?php
    include('head.php');
?>
<section class="del_record_s" id="rec">
    <h1>admin</h1>
    <div class="container-md">
        <div class="alert alert-warning">
        <a class='btn btn-primary' href='vendor/delete.php?name=".$namem[1]."'>удалить</a>
            <form method="POST" action="vendor/new.php">
                <input class="form-control col-5" required type="text" placeholder="Название опроса" name="name">
                <h2>Тип 1</h2>
                <input class="form-control col-5" required type="text" placeholder="Вопрос" name="q1">
                <input class="form-control col-5" required type="number" placeholder="Ответ" name="a1">  
                <hr>

                <h2>Тип 2</h2>
                <input class="form-control col-5" required type="text" placeholder="Вопрос" name="q2">
                <input class="form-control col-5" required type="number" min="0" placeholder="Ответ" name="a2">  
                <hr>

                <h2>Тип 3</h2>
                <input class="form-control col-5" required type="text" placeholder="Вопрос" name="q3">
                <input class="form-control col-5" required type="text" maxlength="30" placeholder="Ответ" name="a3">  
                <hr>

                <h2>Тип 4</h2>
                <input class="form-control col-5" required type="text" placeholder="Вопрос" name="q4">
                <input class="form-control col-12" required type="text" maxlength="255" placeholder="Ответ" name="a4">  
                <hr>
                
                <h2>Тип 5</h2>
                <input class="form-control col-5" required type="text" placeholder="Вопрос" name="q5">
                <input class="form-control col-3" type="number" min='1' max='100' placeholder="кол-во баллов" name="b5">
                <?php
                $y=0;
                $b = $_POST['pp5'];
                while ($y++<$b){
                    echo '
                    <p><input required name="a5" type="radio" value="'.$y.'">'.$y.'</p> 
                    <input class="form-control col-4" required type="text" placeholder="n" name="var'.$x.'">
                    ';
                } 
                ?>
                
                <a href=""></a>
                
                <hr>
                <h2>Тип 6</h2>
                <input class="form-control col-5" type="text" placeholder="Вопрос" name="q6">
                <input class="form-control col-3" type="number" min='1' max='100' placeholder="кол-во баллов" name="b6">
                <?php
                $x=0;
                $a = $_POST['pp6'];
                while ($x++<$a){
                    echo '
                    <p><input type="checkbox" name="t'.$x.'" value="'.$x.'"><input class="form-control col-4" required type="text" placeholder="n" name="v'.$x.'"></p>
                    ';
                } 
                // Выводит 12345678910
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
<section class="main-s">
        <div class="container">
        <h1>Сессии</h1>
        <div class="paper alert alert-warning">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">удаление</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $names = $db->query("SELECT * FROM `nametable` ");
                    $names = mysqli_fetch_all($names);
                    // var_dump($names);
                    // $names = mysqli_query($db, query:"SELECT * FROM `paper`");
                    // pring_r($names);
                    // $names = mysqli_fetch_all($names);
                    // pring_r($names);
                    foreach($names as $namem) {
                        // ehco "<h1>admin</h1>";
                        echo "
                        <tr>
                            <th>".$namem[0]."</th>
                            <td>".$namem[1]."</td>
                            <td><a class='btn btn-danger' href='vendor/delete.php?name=".$namem[1]."'>удалить</a></td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
</section>
<section class="main-s">
        <div class="container">
        <h1>Ответы</h1>
        <div class="paper alert alert-warning">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Вопрос1</th>
                        <th scope="col">Вопрос2</th>
                        <th scope="col">Вопрос3</th>
                        <th scope="col">Вопрос4</th>
                        <th scope="col">Вопрос5</th>
                        <th scope="col">Правильных в 6</th>
                        <th scope="col">ip</th>
                        <th scope="col">Дата и время</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $score = $db->query("SELECT * FROM `score` ");
                    $score = mysqli_fetch_all($score);

                    foreach($score as $scor) {
                        // ehco "<h1>admin</h1>";
                        echo "
                        <tr>
                            <th>".$scor[0]."</th>
                            <th>".$scor[2]."</th>
                            <td>".$scor[3]."</td>
                            <th>".$scor[4]."</th>
                            <td>".$scor[5]."</td>
                            <th>".$scor[6]."</th>
                            <td>".$scor[8]."</td>

                            <td>".$scor[11]."</td>
                            <td>".$scor[12]."</td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
    </section>
<?php
    include('foot.php');
?>