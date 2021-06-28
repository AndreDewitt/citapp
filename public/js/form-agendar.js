const btn_agendar = document.getElementById("btn_agendar")
const btn_cerrar = document.getElementsByClassName("btn-cerrar")
const btn_anterior = document.getElementsByClassName("btn-anterior")
const btn_siguiente = document.getElementsByClassName("btn-siguiente")
const btn_finalizar = document.getElementsByClassName("btn-finalizar")

const pag1 = document.getElementsByClassName("pag-1")
const pag2 = document.getElementsByClassName("pag-2")

const modal_agendar = document.getElementsByClassName("modal")
const categorias = document.getElementsByClassName("categoria")
const form_agendar = document.getElementById("agendar-cita")
const titulo = document.getElementById("h1_nombre_negocio")
const select = document.getElementById("select_servicios")
let aux = 0

const reset_pag1 = () => {
    btn_anterior[0].classList.add('btn-oculto')
    btn_siguiente[0].classList.remove('btn-oculto')
    btn_finalizar[0].classList.add('btn-oculto')
};

document.addEventListener('click', evt => {
    const c = evt.target.getAttribute("class")
    if (c === 'btn_agendar material-icons' || c === 'btn btn-icon-self btn-azul btn_agendar material-icons') {
        const clase = modal_agendar[0].getAttribute("class");
        if (clase === 'modal modal-ocultar' && evt.target.dataset.nombre != '') {
            if (evt.target.matches('.btn_agendar')) {
                titulo.innerHTML = evt.target.dataset.nombre
                servicios(evt.target.dataset.id);
            }
            modal_agendar[0].classList.remove('modal-ocultar');
        }
    } else if (c === 'negocio categoria') {
        vaciarNegocios()
        if (!evt.target.dataset.id) {
            location.reload()
        } else {
            filtrar(evt.target.dataset.id)
        }
    } else {
        const id = evt.target.getAttribute("id")
        if (id == 'btn-cerrar-aux') {
            location.reload();
        }
    }
});

select.addEventListener('click', (evt) => {
    if (aux > 0) {
        vaciarHorarios()
        horarios(select.value)
        aux = 0;
    } else {
        aux = 1;
    }
});


btn_siguiente[0].addEventListener('click', () => {
    btn_anterior[0].classList.remove('btn-oculto')
    btn_siguiente[0].classList.add('btn-oculto')
    btn_finalizar[0].classList.remove('btn-oculto')
    pag1[0].classList.add('pag-ocultar')
    pag2[0].classList.remove('pag-ocultar')
});

btn_anterior[0].addEventListener('click', () => {
    reset_pag1()
    pag1[0].classList.remove('pag-ocultar')
    pag2[0].classList.add('pag-ocultar')
});

btn_cerrar[0].addEventListener('click', () => {
    titulo.innerHTML = ''
    vaciarHorarios()
    vaciarServicios()
    pag1[0].classList.remove('pag-ocultar')
    pag2[0].classList.add('pag-ocultar')
    reset_pag1()
    modal_agendar[0].classList.add('modal-ocultar');
});