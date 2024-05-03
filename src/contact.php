<?php 
include '../script/connect.php';
include 'script/validate.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Звездные войны</title>
</head>
<body>
<header>
        <h1>Звездные Войны</h1>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="films.php">Фильмы</a></li>
                <li><a href="characters.php">Персонажи</a></li>
                <li><a href="news.php">Новости</a></li>
                <li><a href="plays.php">Игры</a></li>
                <li><a href="contact.php">Контакты</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Контакты</h1>
        <section>
            <h2>Свяжитесь с нами</h2>
            <p>Если у Вас есть вопросы или предложения, пожалуйста, свяжитесь с нами через форму ниже или используйте контактные данные.</p>
            <form method="post" id="form" action="sumbit.php">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Сообщение:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Отправить</button>
            </form>
        </section>
        <section>
            <h2>Контактные данные</h2>
            <address>
                <p>Звездные Войны Inc.</p>
                <p>123 Эплская улица</p>
                <p>Город Лея, Планета Татуин</p>
                <p>Телефон: <a href="tel:+123456789">+1 234 567 89</a></p>
                <p>Email: <a href="mailto:info@starwars.com">info@starwars.com</a></p>
            </address>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Звездные Войны Inc. Все права защищены.</p>
    </footer>
        </section>
    </main>
</body>
</html>