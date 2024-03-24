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
            header("location:profile.php");
            exit;
        }
    }
} else {
    // Если переменная не установлена, редиректим пользователя на страницу входа в систему
    header("location:../index.php");
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
    <link rel="shortcut icon" href="./images/svg/shortcut_icon.svg" type="image/svg">
</head>

<body>
    <a class="main-menu_item admin_text" href="./php_handler/exit.php">Выйти из админки</a>
    <?php
    $qInfoFavorite = "SELECT * FROM question, user WHERE question.id_user = user.id_user";
    addslashes($qInfoFavorite);
    $resInfoFavorite = mysqli_query($connect, $qInfoFavorite) or die(mysqli_error($connect));
    while ($InfoFavorite = mysqli_fetch_object($resInfoFavorite)) {
        echo "
    <div class=\"body_table\">
        <div class=\"admin_container\">
            <div class=\"admin_table_row\">
                <div class=\"admin_table_cell_first admin_projects_table_id\">
                    <p>$InfoFavorite->id_question</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                    <p class=\"admin_table_cell-text margin-admin-user-table\">$InfoFavorite->question_text	</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                    <p class=\"admin_table_cell-text margin-admin-user-table\">$InfoFavorite->login</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                        <p class=\"admin_table_cell-text margin-admin-user-table\">$InfoFavorite->qtime</p>
                </div>
            </div>
        </div>
    </div>
";
    }
    ?>

</body>

</html>