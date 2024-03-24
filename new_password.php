<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/main.css">
    <title>Восстановление пароля</title>
    <link rel="shortcut icon" href="./images/svg/shortcut_icon.svg" type="image/svg">
</head>
<body>
    <div class="error_message">
        <?php
        session_start();
        if (isset($_SESSION['message'])) {
            echo "<p class=\"error_message_text\">{$_SESSION['message']}</p>";
            unset($_SESSION['message']);
        }
        ?>
    </div>
    <h2>Введите новый пароль</h2>
    9x8Ao'nO
    <form action="./php_handler/handle_new_password.php" method="post">
        <div class="div-input_form-email">
            <input type="password" class="input_form-email" name="new_password" placeholder="Новый пароль" autocomplete="off" minlength="8" maxlength="30" required>
        </div>
        <div class="div-input_form-email">
            <input type="password" class="input_form-email" name="confirm_password" placeholder="Подтвердите пароль" autocomplete="off" minlength="8" maxlength="30" required>
        </div>
        <?php
        // Вывод токена сброса пароля как скрытого поля формы
        if (isset($_GET['token'])) {
            echo "<input type=\"hidden\" name=\"reset_token\" value=\"{$_GET['token']}\">";
        }
        ?>
        <input type="submit" value="Сохранить новый пароль">
    </form>
</body>
</html>
