<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Фотоальбом</title>
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
    <header>
        <img src="../public/images/logo.png" alt="Логотип" width="50">
        <h1>Фотоальбом</h1>
        <nav>
            <a href="?page=home">Главная страница</a>
            <a href="?page=photoalbum">Фотоальбом</a>
            <a href="?page=interests">Мои интересы</a>
            <a href="?page=contact">Контакт</a>
            <a href="?page=test">Тест</a>
        </nav>
    </header>
    <main>
        <h2>Фотоальбом</h2>
        <div class="gallery">
            <?php for ($i = 1; $i <= 15; $i++): ?>
                <div class="gallery-item">
                    <img src="../public/images/photo.jpg" alt="Фото <?php echo $i; ?>" class="thumbnail">
                </div>
            <?php endfor; ?>
        </div>
    </main>
    <footer>
        <p>© 2025 Мой сайт</p>
    </footer>
</body>
</html>