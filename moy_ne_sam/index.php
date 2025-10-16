<?php
require_once "db/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>мой не сам</title>
    <link rel='icon' href='images/nugget.jpeg'>
    <link rel='stylesheet' href='style/style.css'>
</head>
<body>
    <header> <img src='images/nugget.jpeg' alt='логотип'>
        <h1> Мой не сам </h1>
    </header>
    <nav>
        <a href='/demo-exam/moy_ne_sam'>Главное</a>
        <a href='/demo-exam/moy_ne_sam/admin'>Админ</a>
    </nav>

    <main>
        <h1>Авторизация</h1>
        <label>Логин
            <input type="text" name="login">
        </label>
        <label>Пароль
            <input type="text" name="password">
        </label>
        <button>Вход</button>
        <p class="Error"></p>
        <footer>
        <h3>2025</h3>
        </footer>
    </main>

    <script src='script/script.js'></script>
</body>
</html>