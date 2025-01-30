const navItems = document.querySelectorAll('.nav-item a');
const currentPage = window.location.pathname;
navItems.forEach(item => {
    if (item.pathname === currentPage) {
        item.classList.add('active');
    }
});
