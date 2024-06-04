document.addEventListener('DOMContentLoaded', function () {
    const boxes = document.querySelectorAll('.box');
    const popup = document.getElementById('popup');
    const popupImage = document.getElementById('popup-image');

    boxes.forEach(function (box) {
        const image = box.querySelector('.image img');
        image.addEventListener('click', function () {
            popupImage.src = image.src;
            popup.style.display = 'block';
        });
    });

    popup.addEventListener('click', function (event) {
        if (event.target === popup || event.target.classList.contains('close')) {
            popup.style.display = 'none';
        }
    });
});
