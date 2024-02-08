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
                    <div class="email-and-password">
                        <label class="label_input_auth">Логин</label>
                        <div class="div-input_form-email">
                            <input type="text" class="input_form-email" name="login" placeholder="Введите логин" autocomplete="off" required="required" minlength="4" maxlength="20">
                        </div>
                        <label class="label_input_auth">Пароль</label>
                        <div class="div-input_form-email">
                            <input type="password" class="input_form-email" name="password" placeholder="Введите пароль" autocomplete="off" required="required" minlength="8">
                        </div>
                    </div>
                    <input type="submit" name="submit" class="submit" value="Войти">
                    <div class="reset-password">
                        <a class="reset-pass-text">забыли пароль? позвоните 89035371212</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>