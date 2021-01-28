<?php
    session_start();
    include('head.php');



    setcookie('user_find', 0, time() + 3600, "/" );
    setcookie('card_find', 0, time() + 3600, "/" );
?>


    <section class="main-s">
        <div class="container">
        <h1>Бумага</h1>
        <div class="paper alert alert-warning">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">изменение</th>
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
                    foreach($names as $name) {
                        // ehco "<h1>admin</h1>";
                        echo "
                        <tr>
                            <th>".$name[0]."</th>
                            <td>".$name[1]."</td>

                            <td><a class='btn btn-warning' href='updatepaper.php?id=".$pape[0]."'>изменить</a></td>
                            <td><a class='btn btn-danger' href='vendor/deletepaper.php?id=".$pape[0]."'>удалить</a></td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
            <!-- <h2>Добавить тип бумаги</h2>
            <form action="vendor/createpaper.php" method="post">
                <label for="price">Цена</label>
                <input type="number" name="price" required class="form-control" id="price" placeholder="Введите цену">
                <label for="depth">Толщина</label>
                <input type="number" name="depth" required class="form-control" id="depth" placeholder="Введите толщину">
                <label for="amountlists">Количество листов</label>
                <input type="number" name="amountlists" required class="form-control" id="amountlists" placeholder="Введите количество листов">
                <label for="density">Плотность</label>
                <input type="number" name="density" required class="form-control" id="density" placeholder="Введите плотность">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form> -->
        </div>
        </div>
    </section>


<?php
    include('foot.php'); 
?>