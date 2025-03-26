let currentIndex = 0;
const images = document.querySelectorAll('.gallery-item');

// Открытие модального окна
function openModal(index) {
    currentIndex = index;
    document.getElementById('modal').style.display = "block";
    document.getElementById('modal-img').src = images[currentIndex].src;
}

// Закрытие модального окна
function closeModal() {
    document.getElementById('modal').style.display = "none";
}

// Переключение фото
function changeSlide(n) {
    currentIndex = (currentIndex + n + images.length) % images.length;
    document.getElementById('modal-img').src = images[currentIndex].src;
}

// Закрытие по клику вне изображения
document.querySelector('.modal').addEventListener('click', (e) => {
    if (e.target.classList.contains('modal')) closeModal();
});

// Управление клавиатурой
document.addEventListener('keydown', (e) => {
    if (document.getElementById('modal').style.display === "block") {
        if (e.key === 'ArrowLeft') changeSlide(-1);
        if (e.key === 'ArrowRight') changeSlide(1);
        if (e.key === 'Escape') closeModal();
    }
});