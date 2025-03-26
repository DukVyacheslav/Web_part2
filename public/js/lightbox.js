document.addEventListener('DOMContentLoaded', () => {
    const thumbnails = document.querySelectorAll('.thumbnail');
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const closeBtn = document.getElementById('close');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    let currentIndex = 0;

    // Открытие лайтбокса при клике на фото
    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', () => {
            currentIndex = index;
            openLightbox();
        });
    });

    // Закрытие лайтбокса
    closeBtn.addEventListener('click', () => {
        lightbox.style.display = 'none';
    });

    // Навигация назад
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + thumbnails.length) % thumbnails.length;
        updateLightboxImage();
    });

    // Навигация вперёд
    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % thumbnails.length;
        updateLightboxImage();
    });

    // Закрытие лайтбокса при клике на фон
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            lightbox.style.display = 'none';
        }
    });

    // Навигация с клавиатуры
    document.addEventListener('keydown', (e) => {
        if (lightbox.style.display === 'flex') {
            if (e.key === 'ArrowLeft') {
                currentIndex = (currentIndex - 1 + thumbnails.length) % thumbnails.length;
                updateLightboxImage();
            } else if (e.key === 'ArrowRight') {
                currentIndex = (currentIndex + 1) % thumbnails.length;
                updateLightboxImage();
            } else if (e.key === 'Escape') {
                lightbox.style.display = 'none';
            }
        }
    });

    // Функция открытия лайтбокса
    function openLightbox() {
        updateLightboxImage();
        lightbox.style.display = 'flex';
    }

    // Функция обновления изображения в лайтбоксе
    function updateLightboxImage() {
        lightboxImage.src = thumbnails[currentIndex].src;
        lightboxImage.alt = thumbnails[currentIndex].alt;
    }
});