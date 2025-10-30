<?php
require_once "db/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Нарушениям нет<?php echo $pagetitle ?></title>
    <link rel='icon' href='images/net.png'>
    <link rel='stylesheet' href='style/style.css'>
</head>

<body>
<header> 
        <img src='images/net.png' alt='логотип'>
        <h1>Нарушениям нет</h1>
    </header>

    <nav>
        <a href="/narysheniyam-net/narysheniyam_net">Авторизация</a>
        <a href="/narysheniyam-net/narysheniyam_net/zayavka.php">Заявки</a>
        <a href="/narysheniyam-net/narysheniyam_net/admin.php">Админ-панель</a>
        <a href="/narysheniyam-net/narysheniyam_net/registration.php">Регистрация</a>
        <a href="/narysheniyam-net/narysheniyam_net/create-zayavka.php">Создание заявки</a>
    </nav>

    <main>
        <h1>
            <?php
            echo $pagetitle;
            ?>
        </h1>
        <div class="content">
            <?php
            echo $pagecontent ?? "";
            ?>
        </div>
        <footer>
            <h3>2025</h3>
        <footer>
    </main>

<script src="script/script.js"></script>
</body>
</html>