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

$qCreateTrack = "INSERT INTO `role` (`name_role`) VALUES ('$name_role')";
addslashes($qCreateTrack);
$resCreateTrack = mysqli_query($connect, $qCreateTrack);

if ($resCreateTrack) {
    $_SESSION['success_message'] = "Роль успешно создана.";
} else {
    $_SESSION['error_message'] = "Ошибка при создании роли: " . mysqli_error($connect);
}

header("location: ../../role_table.php");
?>
