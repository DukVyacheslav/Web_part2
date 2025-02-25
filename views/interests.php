<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои интересы</title>
    <link rel="stylesheet" href="../scss/styles.css">
</head>
<body>
    <header>
        <h1>Мои интересы</h1>
        <nav>
            <ul>
                <li><a href="index.html"><img src="icons/icon1.png" alt="Иконка">Главная страница</a></li>
                <li><a href="about.html"><img src="icons/icon1.png" alt="Иконка">Обо мне</a></li>
                <li>
                    <a href="interests.html" class="active"><img src="icons/icon2.png" alt="Иконка">Мои интересы</a>
                    <ul>
                        <li><a href="#hobby">Мое хобби</a></li>
                        <li><a href="#books">Мои любимые книги</a></li>
                        <li><a href="#music">Моя любимая музыка</a></li>
                        <li><a href="#films">Мои любимые фильмы</a></li>
                    </ul>
                </li>
                <li><a href="studies.html"><img src="icons/icon1.png" alt="Иконка">Учеба</a></li>
                <li><a href="photo album.html"><img src="icons/icon1.png" alt="Иконка">Фотоальбом</a></li>
                <li><a href="contact.html"><img src="icons/icon1.png" alt="Иконка">Контакт</a></li>
                <li><a href="test.html"><img src="icons/icon1.png" alt="Иконка">Тест по дисциплине</a></li>
                <li><a href="history.html"><img src="icons/icon1.png" alt="Иконка">История просмотра</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Мои интересы</h2>
        <h2 id="hobby">Мое хобби</h2>
        <div id="hobby-list"></div>
        <h2 id="books">Мои любимые книги</h2>
        <div id="books-list"></div>
        <h2 id="music">Моя любимая музыка</h2>
        <div id="music-list"></div>
        <h2 id="films">Мои любимые фильмы</h2>
        <div id="films-list"></div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="/js/tracking.js"></script>
        <script>
            $(document).ready(function() {
                // Функция для создания списка
                function createList(items, containerId) {
                    const ul = $('<ul>');
                    items.forEach(item => {
                        const li = $('<li>').text(item);
                        ul.append(li);
                    });
                    $('#' + containerId).append(ul);
                }

                // Примеры данных
                const hobbies = ['Собаки — мои самые преданные компаньоны, они всегда рядом, когда мне нужно внимание и поддержка.',
                 'Я люблю наблюдать за тем, как они играют и радуются жизни, ведь каждая прогулка превращается в маленькое приключение.',
                 'Обучение собак новым трюкам приносит мне огромное удовольствие, особенно когда вижу результаты своих усилий.',
                 'Забота о здоровье моих питомцев — важная часть моего дня, я слежу за их питанием и регулярно посещаем ветеринара.',
                 'Прогулки на свежем воздухе с собаками помогают мне оставаться активным и заряжают энергией на весь день.',
                 'Общение с другими владельцами собак позволяет обмениваться опытом и узнавать новые интересные факты о наших четвероногих друзьях.',
                 'Я стараюсь создавать для своих собак комфортные условия дома, чтобы они чувствовали себя уютно и безопасно.',
                 'Мои собаки вдохновляют меня на творчество, часто я рисую их портреты или делаю фотографии.',
                 'Вместе мы участвуем в различных мероприятиях и выставках, где можем показать свои навыки и пообщаться с единомышленниками.',
                 'В конце дня ничто не сравнится с теплом и лаской, которую дарят мне мои любимые собаки.'];
                const books = ['Книги занимают особое место в моей жизни, они позволяют путешествовать во времени и пространстве, не выходя из дома.',
                 'Одной из моих любимых книг является «Мастер и Маргарита» Михаила Булгакова, которая поражает своей глубиной и многогранностью.',
                 'Также я восхищаюсь произведениями Федора Достоевского, особенно романом «Преступление и наказание», который заставляет задуматься о природе добра и зла.',
                 'Люблю читать классику, и среди моих фаворитов — Лев Толстой с его эпопеей «Война и мир».',
                 'Современная литература тоже занимает важное место в моем сердце, например, романы Харуки Мураками, такие как «Норвежский лес», вызывают у меня сильные эмоции.',
                 'Фантастика — еще одно направление, которое я ценю, и здесь нельзя не упомянуть «1984» Джорджа Оруэлла, произведение, которое до сих пор актуально.',
                 'Среди детских книг особое место занимает «Маленький принц» Антуана де Сент-Экзюпери, который учит нас видеть красоту в простых вещах.',
                 'Я также увлекаюсь историческими романами, такими как «Имя розы» Умберто Эко, где переплетаются детективный сюжет и глубокие философские размышления.',
                 'В жанре нон-фикшн мне нравится читать биографии великих людей, например, «Стив Джобс» Уолтера Айзексона, которая раскрывает историю успеха одного из самых известных предпринимателей нашего времени.',
                 'Каждая книга, которую я читаю, оставляет след в моей душе и помогает мне лучше понимать окружающий мир и самого себя.'];
                const music = ['Рок-музыка — это моя страсть, она наполняет мою жизнь энергией и эмоциями.',
                 'Одним из моих любимых исполнителей является группа Led Zeppelin, чьи мощные риффы и харизматичный вокал Роберта Планта завораживают с первых нот.',
                 'Также я обожаю Pink Floyd с их атмосферными композициями и глубокими текстами, которые заставляют задуматься о смысле жизни.',
                 'Классический рок никогда не устаревает, и среди моих фаворитов — The Rolling Stones, чья музыка остается актуальной уже несколько десятилетий.',
                 'Современный рок тоже имеет свое место в моем плейлисте, и здесь я выделяю группы вроде Muse, которые сочетают традиционные элементы рока с новыми звуковыми экспериментами.',
                 'Я люблю посещать концерты, где могу почувствовать всю мощь живой музыки и энергию толпы.',
                 'Некоторые песни становятся настоящими гимнами, и одна из таких — «Bohemian Rhapsody» Queen, которая сочетает в себе разные музыкальные жанры и вызывает бурю эмоций.',
                 'Русский рок тоже занимает важное место в моём сердце, и тут невозможно не упомянуть группу «Кино» с её культовым лидером Виктором Цоем.',
                 'Рок-фестивали — это особенное событие, где можно насладиться музыкой под открытым небом и встретить единомышленников.',
                 'Рок-музыка для меня — это способ выразить свои чувства и переживания, она вдохновляет и поддерживает в трудные моменты.'];
                const films = ['Фильмы — это источник вдохновения и возможность погрузиться в другой мир, забыть о повседневных заботах.',
                 'Один из моих любимых фильмов — «Форрест Гамп», который рассказывает трогательную историю о простом человеке, преодолевающем трудности и находящем счастье в мелочах.',
                 'Я также обожаю фантастические фильмы, и среди них выделяется «Матрица», которая перевернула представление о жанре и заставила задуматься о природе реальности.',
                 'Исторические драмы тоже занимают важное место в моем списке предпочтений, и здесь нельзя не упомянуть «Список Шиндлера», который глубоко затрагивает тему человечности и сострадания.',
                 'Комедии — отличный способ поднять настроение, и одним из моих фаворитов является «Один дома», который я пересматривал множество раз.',
                 'Фильмы Marvel — это отдельный вид удовольствия, и особенно мне нравятся те, где задействованы супергерои, такие как «Мстители: Война бесконечности».',
                 'Японское кино тоже привлекает мое внимание, и фильм «Ушедшие» Акиры Куросавы оставил неизгладимое впечатление своим глубоким смыслом и визуальной красотой.',
                 'Триллеры и ужасы — еще один жанр, который я люблю, и тут стоит отметить «Психо» Альфреда Хичкока, ставший классикой жанра.',
                 'Документальные фильмы тоже имеют свою ценность, и я часто смотрю работы таких режиссеров, как Луи Терроу, которые открывают глаза на важные социальные проблемы.',
                 'Каждый фильм, который я выбираю, становится частью моего опыта и помогает мне лучше понять мир вокруг и самого себя.'];

                // Создание списков
                createList(hobbies, 'hobby-list');
                createList(books, 'books-list');
                createList(music, 'music-list');
                createList(films, 'films-list');

                // Функция изменения иконки при наведении мыши
                $('nav ul li').not('.active').hover(
                    function() {
                        $(this).find('img').attr('src', 'icons/icon2.png');
                    },
                    function() {
                        $(this).find('img').attr('src', 'icons/icon1.png');
                    }
                );

                // Отслеживание просмотра страницы
                trackPageView();
            });
        </script>
    </main>
</body>
</html>