const modeTheme = document.querySelector(".theme");
const dark = document.querySelector('.formulario');

modeTheme.addEventListener("click", () => {
    modeTheme.classList.toggle('active');
    dark.classList.toggle('active');
})