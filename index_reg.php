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
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
    <title>Регистрация | Технологический университет программирования</title>
    <meta name="description" content="Зарегистрируйтесь, чтобы получить доступ к авторизации.">
    <meta name="keywords" content="регистрация, личный кабинет, учетная запись, студент, первый курс">
    <link rel="shortcut icon" href="./images/svg/shortcut_icon.svg" type="image/svg">
</head>

<body>

    <!-- форма регистрации -->

    <div class="block_reg" id="reg">
        <div class="wrapper-container">
            <div class="form-content">
                <form class="auth_form" action="./php_handler/reg.php" method="post">
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
                        <label class="label_input_auth">Логин</label>
                        <div class="div-input_form-email">
                            <input type="text" class="input_form-email" name="login" placeholder="Введите логин" autocomplete="off" required="required" minlength="4" maxlength="20">
                        </div>
                        <label class="label_input_auth">Почта</label>
                        <div class="div-input_form-email">
                            <input type="email" class="input_form-email" name="email" placeholder="ivanov@mail.ru" autocomplete="off" required="required" minlength="4" maxlength="50">
                        </div>
                        <label class="label_input_auth">Пароль</label>
                        <div class="div-input_form-email">
                            <input type="password" class="input_form-email" name="password" placeholder="Придумайте пароль" autocomplete="off" required="required" minlength="8" maxlength="30">
                        </div>
                        <label class="label_input_auth">Подтвердить пароль</label>
                        <div class="div-input_form-email">
                            <input type="password" class="input_form-email" name="confirmpassword" placeholder="Подтвердите пароль" autocomplete="off" required="required" minlength="8" maxlength="30">
                        </div>
                    </div>
                    <div class="h-captcha" data-sitekey="748dbcf4-3ab4-4538-9aa5-9fabae2502d1"></div>
                    <input type="submit" name="submit" class="submit" value="Зарегистрироваться">
                    <div class="reset-password">
                        <a href="./index_auth.php" class="reset-pass-text">уже зарегистрированы? войти</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>