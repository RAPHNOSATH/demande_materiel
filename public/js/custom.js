document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.querySelector('.sidebar');
    const pageBodyWrapper = document.querySelector('.page-body-wrapper');
    const navbar = document.querySelector('.navbar');
    const toggler = document.querySelector('.navbar-toggler'); // Bouton hamburger

    if (toggler) {
        toggler.addEventListener('click', function () {
            // Basculer la classe 'toggled' sur la sidebar, page-body-wrapper et navbar
            sidebar.classList.toggle('toggled');
            pageBodyWrapper.classList.toggle('toggled');
            navbar.classList.toggle('toggled');
        });
    }
});