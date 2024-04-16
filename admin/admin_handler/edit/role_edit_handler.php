<?php
session_start();
include "../../../php_connect/connect.php";

// Очистка и проверка переменной $IDuser
if (isset($_SESSION['id_user'])) {
    $IDuser = $_SESSION['id_user'];
    if ($IDuser === '') {
        unset($IDuser);
    }
}

// Проверка наличия и корректности значения поля name_role
if (!isset($_POST['name_role']) || empty($_POST['name_role'])) {
    $_SESSION['error_message'] = "Поле 'name_role' не может быть пустым.";
    header("location: ../../role_table.php");
    // Прерываем выполнение скрипта
    exit; 
}

$name_role = trim($_POST['name_role']);

$queryTrack = "UPDATE `role` SET `name_role` = '$name_role'";
addslashes($queryTrack);
$resProject = mysqli_query($connect, $queryTrack) or die(mysqli_error($connect));

if ($resCreateTrack) {
    $_SESSION['success_message'] = "Роль успешно изменена.";
} else {
    $_SESSION['error_message'] = "Ошибка при обновлении роли: " . mysqli_error($connect);
}

header("location: ../../role_table.php");
?>
