const btn_agendar = document.getElementById("btn_agendar")
const btn_cerrar = document.getElementById("cerrar")
const modal_agendar = document.getElementsByClassName("modal")

btn_agendar.addEventListener('click', () => {
    const clase = modal_agendar[0].getAttribute("class");
    if (clase === 'modal modal-ocultar') {
        modal_agendar[0].classList.remove('modal-ocultar');
    } else {
        modal_agendar[0].classList.add('modal-ocultar');
    }
});

btn_cerrar.addEventListener('click', () => {
    const clase = modal_agendar[0].getAttribute("class");
    if (clase === 'modal modal-ocultar') {
        modal_agendar[0].classList.remove('modal-ocultar');
    } else {
        modal_agendar[0].classList.add('modal-ocultar');
    }
});

