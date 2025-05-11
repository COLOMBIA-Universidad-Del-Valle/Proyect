const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const registerBtna = document.querySelector('.register-btna');
const loginBtn = document.querySelector('.login-btn');
const loginBtna = document.querySelector('.login-btna');

registerBtn.addEventListener('click', () => {
    container.classList.add('active');
});

registerBtna.addEventListener('click', () => {
    container.classList.add('active');
});

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
});

loginBtna.addEventListener('click', () => {
    container.classList.remove('active');
});

if (window.location.hash === '#registro') {
    container.classList.add('active');
}

function toggleMenu() {
    const menu = document.getElementById("menuOptions");
    menu.style.display = menu.style.display === "block" ? "none" : "block";
}

document.addEventListener("click", function (event) {
    const button = document.querySelector(".menu-button");
    const menu = document.getElementById("menuOptions");
    if (!button.contains(event.target) && !menu.contains(event.target)) {
        menu.style.display = "none";
    }
});
