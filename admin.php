<?php
    include('head.php');
?>
<section class="del_record_s" id="rec">
    <h1>admin</h1>
    <div class="container-md">
        <div class="alert alert-warning">
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
                <p><input required name="a5" type="radio" value="1">1</p> 
                <input class="form-control col-4" required type="text" placeholder="n" name="var1">
                <p><input required name="a5" type="radio" value="2">2</p>
                <input class="form-control col-4" required type="text" placeholder="n" name="var2">
                
                
                <hr>
                <h2>Тип 6</h2>
                <input class="form-control col-5" type="text" placeholder="Вопрос" name="q6">
                <input class="form-control col-3" type="number" min='1' max='100' placeholder="кол-во баллов" name="b1">
                <?php
                $x=0;
                while ($x++<3){
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
<?php
    include('foot.php');
?>