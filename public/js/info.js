const desc = document.getElementsByClassName("btn-desc");
const ubic = document.getElementsByClassName("btn-ubicacion");
const canc = document.getElementsByClassName("btn-cancelar");
const mod = document.getElementsByClassName("modal");

desc[0].addEventListener('click', () => {
    const clase = mod[0].getAttribute("class")
    console.log(clase);
    if (clase == 'desc modal modal-ocultar') {
        mod[0].classList.remove('modal-ocultar');
    } else {
        mod[0].classList.add('modal-ocultar');
    }
});

ubic[0].addEventListener('click', () => {
    const clase = mod[1].getAttribute("class")
    console.log(clase);
    if (clase == 'ubic modal modal-ocultar') {
        mod[1].classList.remove('modal-ocultar');
    } else {
        mod[1].classList.add('modal-ocultar');
    }
});

canc[0].addEventListener('click', () => {
    mod[0].classList.add('modal-ocultar');
});

canc[1].addEventListener('click', () => {
    mod[1].classList.add('modal-ocultar');
});