const btn_agendar = document.getElementById("btn_agendar")
const modal_agendar = document.getElementsByClassName("modal")
const categorias = document.getElementsByClassName("categoria")
const form_agendar = document.getElementById("agendar-cita")
const titulo = document.getElementById("h1_nombre_negocio")

document.addEventListener('click', evt => {
    const clase = modal_agendar[0].getAttribute("class");
    const select = document.getElementById("select_servicios")
    if (clase === 'modal modal-ocultar') {
        if (evt.target.matches('.btn_agendar')) {
            titulo.innerHTML = evt.target.dataset.nombre
        }
        modal_agendar[0].classList.remove('modal-ocultar');
        servicios(evt.target.dataset.id);
    } else if (select.value > 0) {
        horarios(select.value)
        select.value = 0
    } else if (evt.target.matches('.btn_cerrar')) {
        titulo.innerHTML = ''
        modal_agendar[0].classList.add('modal-ocultar');
    }
});

form_agendar.addEventListener('submit', () => {
    
});