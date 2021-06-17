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

const render = (dia) => {
    const div_hora = document.createElement('div');
    const div_opciones = document.createElement('div');
    const h3 =  document.createElement('h3');
    const label_de = document.createElement('label');
    const select_de = document.createElement('select');
    const label_a = document.createElement('label');
    const select_a = document.createElement('select');
    const label_di = document.createElement('label');
    const select_di = document.createElement('select');

    div_hora.classList.add('hora_dia');
    div_hora.classList.add('dia_'+dia);
    div_opciones.classList.add('opciones');

    h3.innerHTML = dia;
    label_de.innerHTML = 'De: ';
    label_a.innerHTML = ' A: ';
    label_di.innerHTML = ' Disponibilidad: ';
    select_de.innerHTML = '<option>00:00</option>';
    select_a.innerHTML = '<option>00:00</option>';
    select_di.innerHTML = '<option>0</option>';

    div_opciones.appendChild(label_de);
    div_opciones.appendChild(select_de);
    div_opciones.appendChild(label_a);
    div_opciones.appendChild(select_a);
    div_opciones.appendChild(label_di);
    div_opciones.appendChild(select_di);
    div_hora.appendChild(h3);
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
        const array = ['Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo']
        for (let index = 0; index < array.length; index++) {
            render(array[index])
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
        render('Lunes');
    } else {
        remove('Lunes');
    }
});

dia_martes.addEventListener('click', () => {
    if (dia_martes.checked == true) {
        render('Martes');
    } else {
        remove('Martes');
    }
});

dia_miercoles.addEventListener('click', () => {
    if (dia_miercoles.checked == true) {
        render('Miércoles');
    } else {
        remove('Miércoles');
    }
});

dia_jueves.addEventListener('click', () => {
    if (dia_jueves.checked == true) {
        render('Jueves');
    } else {
        remove('Jueves');
    }
});

dia_viernes.addEventListener('click', () => {
    if (dia_viernes.checked == true) {
        render('Viernes');
    } else {
        remove('Viernes');
    }
});

dia_sabado.addEventListener('click', () => {
    if (dia_sabado.checked == true) {
        render('Sábado');
    } else {
        remove('Sábado');
    }
});

dia_domingo.addEventListener('click', () => {
    if (dia_domingo.checked == true) {
        render('Domingo');
    } else {
        remove('Domingo');
    }
});
