document.addEventListener('DOMContentLoaded', function() {
    const sideMenu = document.querySelector('.l-side-menu');
    const mobileMenuIcon = document.querySelector('.c-header__mobilemenuIcon');
    const mobileMenuCloseIcon = document.querySelector('.l-side-menu__mobile__icon');
    const mobileBg = document.querySelector('.l-side-menu__bg');
    const mobileBody = document.querySelector('.l-body');
    

    mobileMenuIcon.addEventListener('click', function() {
        sideMenu.classList.add('active');
        mobileBg.classList.add('active');
        mobileBody.classList.add('active');
    });

    mobileMenuCloseIcon.addEventListener('click', function() {
        sideMenu.classList.remove('active');
        mobileBg.classList.remove('active');
        mobileBody.classList.remove('active');
    });

    // 画面サイズが変更されたときの処理
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 835) {
            sideMenu.classList.remove('active');
            mobileBg.classList.remove('active');
            mobileBody.classList.remove('active');
        }
    });
});