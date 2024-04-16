<?php
session_start();

include "../php_connect/connect.php";

if (isset($_SESSION['id_user'])) {
    $IDuser = $_SESSION['id_user'];

    $query_access = "SELECT * FROM user, role WHERE id_user = '$IDuser' AND user.id_role = role.id_role";
    $result_access = mysqli_query($connect, $query_access);

    if ($result_access) {
        $row_access = mysqli_fetch_object($result_access);
        $role = $row_access->name_role;

        if ($role === 'Администратор') {
            // Если пользователь - администратор, разрешаем доступ к странице profile_admin.php
            // header("location:profile_admin.php");
            // exit;
        } else {
            // Если пользователь НЕ является администратором, перенаправляем на profile.php
            header("location:../profile.php");
            exit;
        }
    }
} else {
    // Если переменная не установлена, редиректим пользователя на страницу входа в систему
    header("location:../profile.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scss/main.css">
    <title>Таблица документы</title>
    <link rel="shortcut icon" href="../images/svg/shortcut_icon.svg" type="image/svg">
    <meta name="robots" content="noindex">
</head>
<body>
    
</body>
</html>