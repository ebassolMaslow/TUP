<?php
session_start();

include "../../../php_connect/connect.php";
// include "../../documents_table.php";

if (isset($_SESSION['id_user'])) {
    $IDuser = $_SESSION['id_user'];
    if ($IDuser === '') {
        unset($IDuser);
    }
}

// Получение данных из формы
$email = $_POST['email'];
$surname_docs = $_POST['surname'];
$name_docs = $_POST['uname'];
$middlename_docs = $_POST['middlename'];
$date_docs = $_POST['birthday'];
$group_docs = $_POST['ugroup'];
$document_type = $_POST['document_type'];
$id_user = $_POST['id_user'];

// Подготовленный запрос для добавления данных в таблицу "documents"
$stmt = $connect->prepare("INSERT INTO documents (email, surname, uname, middlename, birthday, ugroup, document_type, id_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $email, $surname_docs, $name_docs, $middlename_docs, $date_docs, $group_docs, $document_type, $id_user);

// Выполнение подготовленного запроса
if ($stmt->execute()) {
    $_SESSION['success_message'] = "Запись успешно создана";
    header("location: ../../documents_table.php?success=referenc _added");
    exit;
} else {
    $_SESSION['error_message'] = "Ошибка при создании записи";
    header("location: ../../documents_table.php?error=reference_not_added");
    exit;
}

// Закрытие подготовленного запроса и соединения с базой данных
$stmt->close();
$connect->close();

header("location: ../../documents_table.php");
