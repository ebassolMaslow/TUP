<?php
session_start();

include "../php_connect/connect.php";

if (empty($_POST['question_text'])) {
    // Если поле вопроса пустое, добавьте здесь код для отображения сообщения об ошибке
    header("location: ../profile.php?error=empty_question");
    exit;
}

// Получение данных из формы
$question_text = $_POST['question_text'];
$id_user = $_POST['id_user'];
$qtime = date("Y-m-d H:i:s");

$stmt = $connect->prepare("INSERT INTO question (question_text, id_user, qtime) VALUES (?, ?, ?)");
$stmt->bind_param("sis", $question_text, $id_user, $qtime);

if ($stmt->execute()) {
    // Вопрос успешно добавлен
    // Добавим код для отображения сообщения об успешном добавлении вопроса
    $_SESSION['success_message'] = "Ваш вопрос отправлен, вам ответят в течение дня!";
    header("location: ../profile.php?success=question_added");
    exit;
} else {
    // Альтернативное сообщение, если сохранение в базу данных не удалось
    $_SESSION['error_message'] = "Ошибка при отправке вопроса, может слишком много символов?";
    header("location: ../profile.php?error=question_not_added");
    exit;
}

// Закрытие подготовленного запроса и соединения с базой данных
$stmt->close();
$connect->close();

header("location: ../profile.php");
