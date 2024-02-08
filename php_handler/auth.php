<?php

session_start();

include "../php_connect/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем логин и пароль из формы
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Защита от SQL-инъекций
    $login = mysqli_real_escape_string($connect, $login);
    $password = mysqli_real_escape_string($connect, $password);

    // Поиск пользователя в базе данных по логину и паролю
    $query = "SELECT * FROM user WHERE login = '$login' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // Если пользователь найден, проверяем его роль
        $row = mysqli_fetch_assoc($result);
        if ($row['id_role'] == 1) {
            // Если пользователь - администратор, создаем сессию и перенаправляем на страницу профиля администратора
            $_SESSION['id_user'] = $row['id_user'];
            header("location: ../profile_admin.php");
            exit(); // добавляем exit() для прекращения выполнения скрипта после перенаправления
        } else if ($row['id_role'] == 2) {
            // Если пользователь - обычный пользователь, создаем сессию и перенаправляем на страницу профиля пользователя
            $_SESSION['id_user'] = $row['id_user'];
            header("location: ../profile.php");
            exit(); // добавляем exit() для прекращения выполнения скрипта после перенаправления
        } else {
            // Роль неопределена, обработка ошибки
            $error = "У пользователя неопределенная роль";
        }
    }
}