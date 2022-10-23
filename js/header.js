const estMobile = window.matchMedia("only screen and (max-width: 1100px)");
const menuBtn = document.getElementById("menu-btn");
menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('open');
});