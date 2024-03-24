<?php

session_start();

include "./php_connect/connect.php";

if (isset($_SESSION['id_user'])) {
    $IDuser = $_SESSION['id_user'];
    if ($IDuser === '') {
        unset($IDuser);
    }
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/main.css">
    <title>Авторизация | Технологический университет программирования</title>
    <meta name="description" content="Авторизуйтесь, чтобы получить доступ к личному кабинету студента первого курса.">
    <meta name="keywords" content="авторизация, личный кабинет, учетная запись, студент, первый курс">
    <link rel="shortcut icon" href="./images/svg/shortcut_icon.svg" type="image/svg">
</head>

<body>

    <!-- форма авторизации -->

    <div class="block_auth" id="auth">
        <div class="wrapper-container">
            <div class="form-content">
                <form class="auth_form" action="./php_handler/auth.php" method="post">
                    <div class="error_message">
                        <?php
                        session_start();
                        if (isset($_SESSION['message'])) {
                            echo "<p class=\"error_message_text\">{$_SESSION['message']}</p>";
                            unset($_SESSION['message']);
                        }
                        ?>
                    </div>
                    <div class="email-and-password">
                        Сделать вывод ошибок
                        <label class="label_input_auth">Логин</label>
                        <div class="div-input_form-email">
                            <input type="text" class="input_form-email" name="login" placeholder="Введите логин" autocomplete="off" required="required" minlength="4" maxlength="20">
                        </div>
                        <label class="label_input_auth">Пароль</label>
                        <div class="div-input_form-email">
                            <input type="password" class="input_form-email" name="password" placeholder="Введите пароль" autocomplete="off" required="required" minlength="8" maxlength="30">
                        </div>
                    </div>
                    <input type="submit" name="submit" class="submit" value="Войти">
                    <div class="reset-password">
                        <a href="./index_reg.php" class="reset-pass-text">ещё нет аккаунта? зарегистрироваться</a>
                        <a href="reset_password.php" class="reset-pass-text reset_password">забыли пароль?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>