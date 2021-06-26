const btn_icono = document.getElementsByClassName("icono-menu")

btn_icono[0].addEventListener('click', () => {
    const menu = document.getElementsByClassName("menu")
    const clase = menu[0].getAttribute("class")
    if (clase == 'menu') {
        menu[0].classList.add("mostrar")
    } else {
        menu[0].classList.remove("mostrar")
    }
});

btn_icono[1].addEventListener('click', () => {
    const menu = document.getElementsByClassName("menu")
    const clase = menu[0].getAttribute("class")
    if (clase == 'menu mostrar') {
        menu[0].classList.remove("mostrar")
    } else {
        menu[0].classList.add("mostrar")
    }
});