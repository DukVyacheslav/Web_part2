<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фотоальбом</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.html">Главная</a>
            <a href="photoalbum.html">Фотоальбом</a>
            <a href="#">Мои интересы</a>
            <a href="#">Контакт</a>
            <a href="#">Тест</a>
        </nav>
    </header>

    <main>
        <h1>Фотоальбом</h1>
        
        <div class="gallery">
            <img src="images/photo1.jpg" class="gallery-item" onclick="openModal(0)">
            <img src="images/photo2.jpg" class="gallery-item" onclick="openModal(1)">
            <img src="images/photo3.jpg" class="gallery-item" onclick="openModal(2)">
            <img src="images/photo4.jpg" class="gallery-item" onclick="openModal(3)">
            <img src="images/photo5.jpg" class="gallery-item" onclick="openModal(4)">
            <img src="images/photo6.jpg" class="gallery-item" onclick="openModal(5)">
            <img src="images/photo7.jpg" class="gallery-item" onclick="openModal(6)">
            <img src="images/photo8.jpg" class="gallery-item" onclick="openModal(7)">
            <img src="images/photo9.jpg" class="gallery-item" onclick="openModal(8)">
            <img src="images/photo10.jpg" class="gallery-item" onclick="openModal(9)">
            <img src="images/photo11.jpg" class="gallery-item" onclick="openModal(10)">
            <img src="images/photo12.jpg" class="gallery-item" onclick="openModal(11)">
            <img src="images/photo13.jpg" class="gallery-item" onclick="openModal(12)">
            <img src="images/photo14.jpg" class="gallery-item" onclick="openModal(13)">
            <img src="images/photo15.jpg" class="gallery-item" onclick="openModal(14)">
        </div>

        <!-- Модальное окно -->
        <div id="modal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modal-img">
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <a class="next" onclick="changeSlide(1)">&#10095;</a>
        </div>
    </main>

    <footer>
        <p>© 2025 Мой сайт</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>