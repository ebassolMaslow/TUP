<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/main.css">
    <title>Сброс пароля | Технологический университет программирования</title>
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
    <h2>Забыли пароль? Введите свой email для сброса пароля</h2>
    <form action="./php_handler/handle_password_reset.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Отправить инструкции по сбросу пароля">
    </form>
</body>

</html>