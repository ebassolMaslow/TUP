<?php
session_start();

include "./php_connect/connect.php";

if (isset($_SESSION['id_user'])) {
    $IDuser = $_SESSION['id_user'];
    if ($IDuser === '') {
        unset($IDuser);
    }
}

if (!isset($_SESSION['id_user'])) {
    header("Location: ./index_auth.php");
    exit;
}

$qInfoUser = "SELECT * FROM user WHERE id_user='$IDuser'";
addslashes($qInfoUser);
$resInfoUser = mysqli_query($connect, $qInfoUser) or die(mysqli_error($connect));
$InfoUser = mysqli_fetch_object($resInfoUser);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/main.css">
    <title>Профиль студента</title>
    <link rel="shortcut icon" href="./images/svg/shortcut_icon.svg" type="image/svg">
    <meta name="robots" content="noindex">
</head>

<body>
    <header>
        <div class="container_header">
            <nav>
                <ul class="main-menu">
                    <li><a class="main-menu_item logo52px" href="./index.php"><img src="./images/svg/logo52px.svg" alt="логотип">туп</a>
                        <a class="main-menu_item logo48px" href="./index.php"><img src="./images/svg/logo48px.svg" alt="логотип">туп</a>
                        <a class="main-menu_item logo36px" href="./index.php"><img src="./images/svg/logo36px.svg" alt="логотип">туп</a>
                    </li>
                    <li><a class="main-menu_item" href="./students.php">студентам</a></li>
                    <li><a class="main-menu_item_inactive">помощь и поддержка</a></li>
                    <li><a class="main-menu_item_inactive">документы</a></li>
                    <li><a class="main-menu_item" href="./profile.php"><img src="./images/svg/profile25px.svg" alt="профиль"></a></li>
                    <li><a class="main-menu_item" href="./php_handler/exit.php">X</a></li>
                    <li>
                        <div class="off-screen-menu">
                            <hr class="hr_osm">
                            <div class="div_ham_menu">
                                <a href="#">документы</a>
                                <a href="#">помощь и поддержка</a>
                                <a href="./students.php">студентам</a>
                            </div>
                        </div>
                        <div class="ham-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="profile">
        <div class="container_students">
            <div class="profile_body">
                <div class="profile_body_left">
                    <p class="profile_body_left_text">Ваши данные</p>
                    <p class="profile_body_left_text"><span>Фамилия:</span> <?php echo "" . $InfoUser->surname . ""; ?></p>
                    <p class="profile_body_left_text"><span>Отчество:</span> <?php echo "" . $InfoUser->uname . ""; ?></p>
                    <p class="profile_body_left_text"><span>Имя:</span> <?php echo "" . $InfoUser->middlename . ""; ?></p>
                    <p class="profile_body_left_text"><span>Группа:</span> <?php echo "" . $InfoUser->ugroup . ""; ?></p>
                    <p class="profile_body_left_text"><span>Специальность:</span> <?php echo "" . $InfoUser->specialization . ""; ?></p>
                    <p class="profile_body_left_text"><span>Серия и номер:</span> <?php echo "" . $InfoUser->passport . ""; ?></p>
                    <p class="profile_body_left_text"><span>Адрес проживания:</span> <?php echo "" . $InfoUser->address . ""; ?></p>
                    <p class="profile_body_left_text">Данные изменились?</p>
                    <button>Изменить данные</button>
                </div>
                <div class="profile_body_right">
                    <h1>Есть вопрос? Сотрудник ответит вам в течение 24 лет</h1>
                    <form action="./php_handler/add_question.php" method="post">
                        <textarea name="question_text" placeholder="Введите ваш вопрос" cols="30" rows="10" maxlength="850"></textarea>
                        <input type="hidden" name="id_user" value="<?php echo $InfoUser->id_user; ?>">
                        <input class="profile_textarea_button" type="submit" value="Задать вопрос">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container_footer">
            <div class="div_footer">
                <div class="footer_left">
                    <h4>Остались вопросы? Задавайте</h4>
                    <button>задать вопрос</button>
                    <p>ТУП - Технологический Университет Программирования</p>
                </div>
                <div class="footer_right">
                    <p>+7 485 917 95 27, +7 977 428 63 33 - <span>Деканат</span></p>
                    <p>+7 977 488 63 70 - <span>Приёмная комиссия</span></p>
                    <div class="socials">
                        <a href="#"><img src="./images/svg/vk70px.svg" alt="вк" class="social_img"></a>
                        <a href="#"><img src="./images/svg/tg70px.svg" alt="телеграмм" class="social_img"></a>
                        <a href="#"><img src="./images/svg/whatsapp70px.svg" alt="вассап" class="social_img"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="./js/ham_menu.js"></script>

</body>

</html>