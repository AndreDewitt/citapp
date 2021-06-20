const btn_servicio = document.getElementById("btn-agregar-servicio"); 
const btn_cancelar = document.getElementById("btn-agregar-cancelar"); 
const btn_atencion = document.getElementById("btn-atencion"); 
const btn_atencion_cancelar = document.getElementById("btn-atencion-cancelar"); 

const dia_lunes = document.getElementById("lunes");
const dia_martes = document.getElementById("martes");
const dia_miercoles = document.getElementById("miercoles");
const dia_jueves = document.getElementById("jueves");
const dia_viernes = document.getElementById("viernes");
const dia_sabado = document.getElementById("sabado");
const dia_domingo = document.getElementById("domingo");
const hora_dias = document.getElementsByClassName("hora_dias");

const todos = document.getElementById("todos");

let contador = 0;

btn_servicio.addEventListener('click', () => {
    const modal = document.getElementsByClassName("modal");
    modal[0].classList.remove('modal-ocultar');
});

btn_cancelar.addEventListener('click', () => {
    const modal = document.getElementsByClassName("modal");
    modal[0].classList.add('modal-ocultar')
});

btn_atencion.addEventListener('click', () => {
    const modal = document.getElementsByClassName("modal");
    modal[1].classList.remove('modal-ocultar');
});

btn_atencion_cancelar.addEventListener('click', () => {
    const modal = document.getElementsByClassName("modal");
    modal[1].classList.add('modal-ocultar')
});

const render = (dia, id) => {
    const div_hora = document.createElement('div');
    const div_opciones = document.createElement('div');
    const h5 =  document.createElement('h5');
    const label_de = document.createElement('label');
    const select_de = document.createElement('input');
    const label_a = document.createElement('label');
    const select_a = document.createElement('input');
    const label_di = document.createElement('label');
    const select_di = document.createElement('input');

    div_hora.classList.add('hora_dia');
    div_hora.classList.add('dia_'+dia);
    div_opciones.classList.add('opciones');
    div_opciones.classList.add('align-beetween');

    h5.innerHTML = dia;
    label_de.innerHTML = 'De: ';
    label_a.innerHTML = ' A: ';
    label_di.innerHTML = ' Disponibilidad: ';
    select_de.setAttribute("id","d_" + id);
    select_de.setAttribute("name","d_" + id);
    select_de.setAttribute("type","time");
    select_de.classList.add("form-control");
    select_de.classList.add("con-w3");
    select_a.setAttribute("id","a_" + id);
    select_a.setAttribute("name","a_" + id);
    select_a.setAttribute("type","time");
    select_a.classList.add("form-control");
    select_a.classList.add("con-w3");
    select_di.setAttribute("id","di_" + id);
    select_di.setAttribute("name","di_" + id);
    select_di.setAttribute("type","number");
    select_di.classList.add("form-control");
    select_di.classList.add("con-w3");

    div_opciones.appendChild(label_de);
    div_opciones.appendChild(select_de);
    div_opciones.appendChild(label_a);
    div_opciones.appendChild(select_a);
    div_opciones.appendChild(label_di);
    div_opciones.appendChild(select_di);
    div_hora.appendChild(h5);
    div_hora.appendChild(div_opciones);
    hora_dias[0].appendChild(div_hora);
}

const remove = (dia) => {
    const div = document.getElementsByClassName("dia_"+dia);
    hora_dias[0].removeChild(div[0]);
}

const remove_all = () => {
    while (hora_dias[0].firstChild) {
        hora_dias[0].removeChild(hora_dias[0].firstChild)
    }
}

todos.addEventListener('click', () => {
    if (todos.checked == true) {
        const iniciales = ['L','Ma','Mi','J','V','S','D']
        const array = ['Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo']
        for (let index = 0; index < array.length; index++) {
            render(array[index], iniciales[index])
        }
        dia_lunes.checked = true;
        dia_martes.checked = true;
        dia_miercoles.checked = true;
        dia_jueves.checked = true;
        dia_viernes.checked = true;
        dia_sabado.checked = true;
        dia_domingo.checked = true;
    } else {
        remove_all()
        cked = true;
        dia_lunes.checked = false;
        dia_martes.checked = false;
        dia_miercoles.checked = false;
        dia_jueves.checked = false;
        dia_viernes.checked = false;
        dia_sabado.checked = false;
        dia_domingo.checked = false;
    }
})

dia_lunes.addEventListener('click', () => {
    if (dia_lunes.checked == true) {
        render('Lunes', 'L');
    } else {
        remove('Lunes', 'L');
    }
});

dia_martes.addEventListener('click', () => {
    if (dia_martes.checked == true) {
        render('Martes', 'Ma');
    } else {
        remove('Martes', 'Ma');
    }
});

dia_miercoles.addEventListener('click', () => {
    if (dia_miercoles.checked == true) {
        render('Miércoles','Mi');
    } else {
        remove('Miércoles','Mi');
    }
});

dia_jueves.addEventListener('click', () => {
    if (dia_jueves.checked == true) {
        render('Jueves', 'J');
    } else {
        remove('Jueves', 'J');
    }
});

dia_viernes.addEventListener('click', () => {
    if (dia_viernes.checked == true) {
        render('Viernes', 'V');
    } else {
        remove('Viernes', 'V');
    }
});

dia_sabado.addEventListener('click', () => {
    if (dia_sabado.checked == true) {
        render('Sábado', 'S');
    } else {
        remove('Sábado', 'S');
    }
});

dia_domingo.addEventListener('click', () => {
    if (dia_domingo.checked == true) {
        render('Domingo', 'D');
    } else {
        remove('Domingo', 'D');
    }
});
