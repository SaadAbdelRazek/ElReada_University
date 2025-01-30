document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', function () {
        if (mobileMenu.style.maxHeight === '0px' || mobileMenu.style.maxHeight === '') {
            mobileMenu.style.maxHeight = mobileMenu.scrollHeight + "px";
        } else {
            mobileMenu.style.maxHeight = '0px';
        }
    });
});