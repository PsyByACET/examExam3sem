<?php
    include('head.php'); 
?>

    <section class="s-r">
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    
                    <h1>Форма регистрации</h1>
                    <form action="vendor/check_user.php" method="post">
                        <input type="text" required class="form-control" maxlength="18" name="login" id="login" placeholder="Логин 
                        <?php 
                            if($_COOKIE['user_find'] == 1) {
                                echo 'данный логин уже используется';
                            }
                        ?>"><br>
                        <input type="text" required class="form-control" maxlength="18" name="name" id="name" placeholder="Имя"><br>
                        <input type="password" required class="form-control" name="pass" maxlength="18" id="pass" placeholder="Пароль"><br>
                        <button class="btn my_button">Зарегистрироваться</button>
                    </form>
                </div>
                <div class="col">
                    <h1>Форма Авторизации</h1>
                    <form action="vendor/auth_user.php" method="post">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль"><br>

                        <button class="btn my_button">Вход</button>
                    </form>
                    <h1>Войти как админ</h1>
                    <form action="vendor/auth_admin.php" method="post">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль"><br>
                        <button class="btn my_button">Вход</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
    include('foot.php'); 
?>