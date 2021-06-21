const btn_registro = document.getElementsByClassName('btn_registro');
const iniciar_sesion = document.getElementsByClassName('iniciar-sesion');
const registrarse = document.getElementsByClassName('registrarse');

btn_registro[0].addEventListener('click', () => {
    const clase = registrarse[0].getAttribute("class");
    if (clase === 'registrarse con-w5 ocultar') {
        registrarse[0].classList.remove('ocultar');
        iniciar_sesion[0].classList.add('ocultar');
    } else {
        registrarse[0].classList.add('ocultar');
        iniciar_sesion[0].classList.remove('ocultar');
    }
});

btn_registro[1].addEventListener('click', () => {
    const clase = registrarse[0].getAttribute("class");
    if (clase === 'registrarse con-w5 ocultar') {
        registrarse[0].classList.remove('ocultar');
        iniciar_sesion[0].classList.add('ocultar');
    } else {
        registrarse[0].classList.add('ocultar');
        iniciar_sesion[0].classList.remove('ocultar');
    }
});