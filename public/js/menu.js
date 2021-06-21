const btn_icono = document.getElementById("icono")

btn_icono.addEventListener('click', () => {
    const menu = document.getElementsByClassName("menu")
    const clase = menu[0].getAttribute("class")
    if (clase == 'menu') {
        menu[0].classList.add("mostrar")
    } else {
        menu[0].classList.remove("mostrar")
    }
});