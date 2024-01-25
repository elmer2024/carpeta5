const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

const navc = document.querySelector("#navc");
const abrirc = document.querySelector("#abrirc");
const cerrarc = document.querySelector("#cerrarc");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})

cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})

abrirc.addEventListener("click", () => {
    navc.classList.add("visible");
})

cerrarc.addEventListener("click", () => {
    navc.classList.remove("visible");
})