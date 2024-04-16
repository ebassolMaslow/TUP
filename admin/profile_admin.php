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
    <title>Профиль Администратора</title>
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" href="../images/svg/shortcut_icon.svg" type="image/svg">
</head>

<body>
    <header>
        <div class="container_header_admin">
            <nav>
                <ul class="main-menu">
                    <li>
                        <a class="main-menu_item logo" href="./profile_admin.php"><img src="../images/svg/logo52px.svg" alt="логотип">туп</a>
                    </li>
                    <li><a class="main-menu_item" href="../profile.php">на сайт</a></li>
                    <li><a class="main-menu_item" href="./role_table.php">к таблицам</a></li>
                  
                        <?php
                        session_start();

                        if (isset($_SESSION['id_user'])) {
                            echo "<a class=\"main-menu_item_exit\" href=\"../php_handler/exit.php\">
                            <svg id=\"exitIcon\" width=\"30\" height=\"33\" viewBox=\"0 0 30 33\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M10.6667 5.61106H9.22222C5.81767 5.61106 4.11467 5.61106 3.05733 6.66839C2 7.72573 2 9.42873 2 12.8333V20.0555C2 23.4601 2 25.1616 3.05733 26.2204C4.11467 27.2777 5.81767 27.2777 9.22222 27.2777H10.6667M10.6667 8.46528C10.6667 5.15317 10.6667 3.49639 11.6879 2.59073C12.7091 1.68506 14.2706 1.95661 17.3934 2.50117L20.759 3.08906C24.217 3.69139 25.946 3.99328 26.973 5.2615C28 6.53117 28 8.36561 28 12.0359V20.8543C28 24.5232 28 26.3576 26.9744 27.6273C25.946 28.8955 24.2156 29.1974 20.7576 29.8012L17.3949 30.3876C14.272 30.9322 12.7106 31.2037 11.6893 30.2981C10.6667 29.3924 10.6667 27.7356 10.6667 24.4235V8.46528Z\" stroke=\"black\" stroke-width=\"3\" />
                                <path d=\"M15 15V17.8889\" stroke=\"black\" stroke-width=\"3\" stroke-linecap=\"round\" />
                            </svg>
                        </a>";
                        }

                        ?>
                   
                </ul>
            </nav>
        </div>
    </header>
    <div class="container_admin">
        <table class="profile_admin_top">
        <tr>
            <th>id</th>
            <th>Вопрос</th>
            <th>Кто задал вопрос</th>
            <th>Дата и время вопроса</th>
        </tr>
            <?php
            $qInfoFavorite = "SELECT * FROM question, user WHERE question.id_user = user.id_user";
            addslashes($qInfoFavorite);
            $resInfoFavorite = mysqli_query($connect, $qInfoFavorite) or die(mysqli_error($connect));
            while ($InfoFavorite = mysqli_fetch_object($resInfoFavorite)) {

                echo "
        <tr>
            <td class=\"td_id\">$InfoFavorite->id_question</td>
            <td class=\"td_question\">$InfoFavorite->question_text</td>
            <td class=\"td_email\">Почта: $InfoFavorite->email Пользователь:$InfoFavorite->login</td>
            <td class=\"td_email\">$InfoFavorite->qtime</td>
            <td class=\"td_submit\"><a href=\"../answer_page.php?id=$InfoFavorite->id_question\" class=\"submit_table\">Ответить</a></td>
        </tr> 
";
            }
            ?>

        </table>
    </div>

    <!-- <div class="container_admin">
        <table>
            <tr>
                <th>id</th>
                <th>Вопрос</th>
                <th>Кто задал вопрос</th>
                <th>Дата и время вопроса</th>
            </tr>
            <tr>
                <td class="td_id">1</td>
                <td class="td_question">Банальные, но неопровержимые выводы, а также ключевые особенности структуры проекта заблокированы в рамках своих собственных рациональных ограничений. А ещё многие известные личности </td>
                <td class="td_email">isip_a.yu.maslikov@mpt.ru</td>
                <td class="td_email">23.03.24</td>
                <td class="td_submit"><input type="submit" class="submit_table" value="Ответить"></td>
            </tr>
        </table>
    </div> -->

</body>

</html>