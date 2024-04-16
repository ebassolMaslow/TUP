<?php
session_start();

include "../php_connect/connect.php";

if (isset($_SESSION['id_user'])) {
    $IDuser = $_SESSION['id_user'];
    if ($IDuser === '') {
        unset($IDuser);
    }
}

if (isset($_POST['ugroup'])) {
    $ugroup = $_POST['ugroup'];
    if ($ugroup === '') {
        unset($ugroup);
    }
}

if (isset($_POST['ugroup'])) {
    $ugroup = $_POST['ugroup'];
    if (strlen($ugroup) > 10) {
        $_SESSION['error_message'] = "Максимальное количество символов 10";
        header("location: ../profile_edit.php");
    } else {
        $ugroup = $ugroup;
    }
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if ($email === '') {
        unset($email);
    }
}

if (isset($_POST['qualification'])) {
    $qualification = $_POST['qualification'];
    if (strlen($qualification) > 15) {
        $_SESSION['error_message'] = "Максимальное количество символов 15";
        header("location: ../profile_edit.php");
    } else {
        $qualification = $qualification;
    }
}

if (isset($_POST['telephone'])) {
    $telephone = $_POST['telephone'];
    if ($telephone === '') {
        unset($telephone);
    }
}

if (isset($_POST['specialization'])) {
    $specialization = $_POST['specialization'];
    if ($specialization === '') {
        unset($specialization);
    }
}

if (isset($_POST['surname'])) {
    $surname = $_POST['surname'];
    if ($surname === '') {
        unset($surname);
    }
}

if (isset($_POST['course'])) {
    $course = $_POST['course'];
    if ($course === '') {
        unset($course);
    }
}

if (isset($_POST['uname'])) {
    $uname = $_POST['uname'];
    if ($uname === '') {
        unset($uname);
    }
}

if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login === '') {
        unset($login);
    }
}

if (isset($_POST['middlename'])) {
    $middlename = $_POST['middlename'];
    if ($middlename === '') {
        unset($middlename);
    }
}

$ugroup = trim($_POST['ugroup']);
$email = trim($_POST['email']);
$qualification = trim($_POST['qualification']);
$telephone = trim($_POST['telephone']);
$specialization = trim($_POST['specialization']);
$surname = trim($_POST['surname']);
$course = trim($_POST['course']);
$uname = trim($_POST['uname']);
$login = trim($_POST['login']);
$middlename = trim($_POST['middlename']);

$queryuser = "UPDATE `user` SET `ugroup` = '$ugroup', `email` = '$email', `qualification` = '$qualification', `telephone` = '$telephone', `specialization` = '$specialization', `surname` = '$surname', `course` = '$course', `uname` = '$uname', `login` = '$login', `middlename` = '$middlename' WHERE `id_user` = '$IDuser'";
addslashes($queryuser);
$resCreateUser = mysqli_query($connect, $queryuser) or die(mysqli_error($connect));

header("location: ../profile.php");
