<?php

session_start();

include "./php_connect/connect.php";

if (isset($_SESSION['id_user'])) {
    $IDuser = $_SESSION['id_user'];
    if ($IDuser === '') {
        unset($IDuser);
    }
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/main.css">
    <title>Первый курс | Технологический университет программирования</title>
    <meta name="description" content="Добро пожаловать на главную страницу первого курса! Здесь вы найдете информацию о расписании, учебных материалах и актуальных событиях.">
    <meta name="keywords" content="первый курс, учебный год, расписание, учебные материалы, события"> 
    <link rel="shortcut icon" href="./images/svg/shortcut_icon.svg" type="image/svg">

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

    <div class="container">
        <h1 class="hero_title">информация для первокурссников</h1>
    </div>

    <section class="hero-image">
        <div class="container">
            <div class="hero_div">
                <div class="sidebar">
                    <ul>
                        <li><a class="sidebar_element_1440px" href="#section1">Расписание начала учебного года</a></li>
                        <li><a class="sidebar_element_1440px" href="#section2">помощь для первокурсников</a></li>
                        <li><a class="sidebar_element_1440px" href="#section3">Контакты деканата</a></li>
                        <li><a class="sidebar_icon" href="#section1"><img src="./images/svg/timetable_sidebar.svg" alt="расписание меню слева"></a></li>
                        <li><a class="sidebar_icon" href="#section2"><img src="./images/svg/question_sidebar.svg" alt="вопрос меню слева"></a></li>
                        <li><a class="sidebar_icon" href="#section3"><img src="./images/svg/profile_sidebar.svg" alt="профиль меню слева"></a></li>
                    </ul>
                </div>
                <a><img src="./images/woman_hero.png" alt="фото девушки" class="hero_img"></a>
            </div>
        </div>
    </section>

    <section class="timetable" id="section1">
        <div class="container">
            <div class="div_timetable">
                <h2>Расписание начала учебного года для первокурсников</h2>
                <p class="div_timetable_text">В начале каждого учебного года Институт Дизайна и IT традиционно
                    организует ряд мероприятий,
                    направленных на интеграцию и адаптацию первокурсников. В ходе этих мероприятий у вас будет
                    возможность познакомиться с руководителями программ, администраторами, сотрудниками деканата и
                    тьюторами, а также узнать больше о возможностях для самореализации вне учебной программы Института
                    Дизайна и IT.</p>
                <div class="timetable_table">
                    <div class="events">
                        <div class="event">
                            <div class="event_column">
                                <p class="event_column_regular display_none">Дата</p>
                                <p class="event_column_regular display_none_text dots">Дата:</p>
                                <p class="event_column_bold">31 августа</p>
                            </div>
                            <div class="event_column">
                                <p class="event_column_regular display_none">Время</p>
                                <p class="event_column_regular display_none_text dots">Время:</p>
                                <p class="event_column_regular">10:00 - 14:00</p>
                            </div>
                            <div class="event_column">
                                <p class="event_column_regular display_none">Мероприятие</p>
                                <p class="event_column_regular display_none_text dots">Мероприятие:</p>
                                <p class="event_column_regular ecr_width">Организационное собрание для адаптации
                                    студентов</p>
                            </div>
                            <div class="event_column">
                                <p class="event_column_regular display_none">Аудитория</p>
                                <p class="event_column_regular display_none_text dots">Аудитория:</p>
                                <p class="event_column_regular">208</p>
                            </div>
                        </div>
                        <hr class="timetable_table_hr">
                        <div class="event">
                            <div class="event_column">
                                <p class="event_column_regular display_none_text dots">Дата:</p>
                                <p class="event_column_bold">1 сентября</p>
                            </div>
                            <div class="event_column">
                                <p class="event_column_regular display_none_text dots">Время:</p>
                                <p class="event_column_bold">17:00</p>
                            </div>
                            <div class="event_column">
                                <p class="event_column_regular display_none_text dots">Мероприятие:</p>
                                <p class="event_column_bold ecr_width">Торжественное открытие учебного года</p>
                            </div>
                            <div class="event_column">
                                <p class="event_column_regular display_none_text dots">Аудитория:</p>
                                <p class="event_column_bold ecr_width_width">Онлайн на платформе Webinar</p>
                            </div>
                        </div>
                        <hr class="timetable_table_hr">
                        <div class="event">
                            <div class="event_column">
                                <p class="event_column_regular display_none_text dots">Дата:</p>
                                <p class="event_column_bold">2 сентября</p>
                            </div>
                            <div class="event_column">
                                <p class="event_column_regular display_none_text dots">Время:</p>
                                <p class="event_column_regular">10:00</p>
                            </div>
                            <div class="event_column">
                                <p class="event_column_regular display_none_text dots">Мероприятие:</p>
                                <p class="event_column_regular ecr_width">Тестирование и распределение в группы</p>
                            </div>
                            <div class="event_column">
                                <p class="event_column_regular display_none_text dots">Аудитория:</p>
                                <p class="event_column_regular">Главный вход</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="answers_to_questions" id="section2">
        <div class="container">
            <div class="div_answers_to_questions">
                <h2>Ответы на самые частые вопросы студентов</h2>
                <div class="ATQ_block">
                    <p>Как узнать номер своей академической группы?</p>
                    <p>Узнать номер вашей учебной группы вы можете в специальной таблице.</p>
                </div>
                <div class="ATQ_block">
                    <p>Как заказать справки об обучении?</p>
                    <p>Заказ справки возможен через личный кабинет студента или на сайте ИОН в специальной форме.</p>
                    <p>Срок подготовки документа – 3-5 рабочих дней, уведомлений о готовности нет. Если вам необходимо,
                        чтобы справку переслали на вашу почту, сделайте соответствующую пометку при формировании заказа.
                    </p>
                </div>
                <div class="ATQ_block">
                    <p>Как проходят занятия физкультурой и что нужно сделать для получения допуска к занятиям?</p>
                    <p>Для участия в занятиях по предмету "Физическая культура" студент должен предоставить заключение
                        (справку) от врача, подтверждающую его принадлежность к медицинской группе здоровья, разрешающую
                        заниматься физической культурой. Это заключение (справку) необходимо обновлять ежегодно и
                        предоставлять на первом учебном занятии на кафедру Физического Воспитания и Здоровья.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts" id="section3">
        <div class="container">
            <div class="div_contacts">
                <h3 class="div_contacts_title">Контакты деканата</h3>
                <p class="div_contacts_subtext"><span>Часы работы: </span>Пн - Пт с 10:00 до 19:00, в субботу с 10:00 до
                    15:00</p>
                <p class="div_contacts_subtext"><span>Email деканата: </span>design-it-institute@dsi.ru</p>
                <p class="div_contacts_subtext"><span>Телефоны:</span></p>
                <p class="div_contacts_subtext">+7 485 917 95 27, +7 977 428 63 33 - <span>Сектор коммуникаций
                        Деканата</span></p>
                <p class="div_contacts_subtext">+7 977 488 63 70 - <span>Сектор расписания</span></p>
                <p class="div_contacts_subtext"><span>Телефоны для заказа пропусков: </span>+7 947 438 63 73, +7 985 488
                    62 75</p>
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

    <script>
        var menuItems = document.querySelectorAll('.sidebar li a');

        menuItems.forEach(function(item) {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                var target = document.querySelector(this.getAttribute('href'));
                window.scrollTo({
                    top: target.offsetTop,
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <script src="./js/ham_menu.js"></script>

</body>

</html>