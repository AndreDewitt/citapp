const form = document.getElementById("agendar-cita")
const guardarCita = () => {
    const data = new FormData(form);
    let opciones = {
        method: "POST",
        body: data
    };
    fetch("http://localhost/citapp/?controllers=agendarController&action=guardarCita",opciones)
    .then((res) => {
        console.log(res);
        location.reload();
    })
    .catch()
    .finally()
}

const servicios = (id) => {
    fetch("http://localhost/citapp/?controllers=agendarController&action=obtenerServicios&id="+id)
    .then((res) => (res.ok ? res.json() : Promise.reject(res)))
    .then((json) => {
        renderServicios(json)
    })
    .catch((err) => {

    })
    .finally(() => {

    });
};

const horarios = (id) => {
    fetch("http://localhost/citapp/?controllers=agendarController&action=obtenerHorarios&id="+id)
    .then((res) => (res.ok ? res.json() : Promise.reject(res)))
    .then((json) => {
        renderHorarios(json)
    })
    .catch((err) => {
    })
    .finally(() => {

    });
};

const filtrar = (id) => {
    fetch("http://localhost/citapp/?controllers=agendarController&action=filtrarNegocios&id="+id)
    .then((res) => (res.ok ? res.json() : Promise.reject(res)))
    .then((json) => {
        renderNegocios(json)
    })
    .catch((err) => {
        console.log(err);
    })
    .finally(() => {

    })
}

const renderNegocios = (json) => {
    const divNegocios = document.getElementsByClassName("servicios")
    const fragment = document.createDocumentFragment()
    json.forEach(el => {
        const div = document.createElement("div")
        const div2 = document.createElement("div")
        const h3 = document.createElement("h3")
        const link = document.createElement("a")
        const agendar = document.createElement("a")

        div.classList.add('servicio')
        div2.classList.add('opciones')
        
        h3.innerHTML = el.nombre
        
        link.setAttribute("href","http://Localhost/citapp/?controllers=agendarController&action=negocio&id="+el.id)
        link.classList.add('material-icons')
        link.innerHTML = 'store'

        agendar.setAttribute("id","btn_agendar_"+el.id)
        agendar.classList.add('btn_agendar')
        agendar.classList.add('material-icons')
        agendar.dataset.id = el.id
        agendar.dataset.nombre = el.nombre
        agendar.innerHTML = 'event'


        div2.appendChild(link)
        div2.appendChild(agendar)
        div.appendChild(h3)
        div.appendChild(div2)
        fragment.appendChild(div)
    });
    divNegocios[0].appendChild(fragment)
}

const vaciarNegocios = () => {
    const divNegocios = document.getElementsByClassName("servicios")
    while (divNegocios[0].firstChild) {
        divNegocios[0].removeChild(divNegocios[0].firstChild)
    }
}

const renderHorarios = (json) => {
    const horario = document.getElementsByClassName("t_horario")
    const fragment = document.createDocumentFragment()
    json.forEach(el => {
        const div = document.createElement("div")
        const div2 = document.createElement("div")
        const div3 = document.createElement("div")
        const label = document.createElement("label")
        const radio = document.createElement("input")
        const di = document.createElement("p")
        const fecha_hora = document.createElement("p")
        
        div.classList.add('dia_hora')
        div2.classList.add('dia')
        div3.classList.add('hora')

        label.innerHTML = el.dia
        di.innerHTML = el.disponibilidad
        fecha_hora.innerHTML = el.fecha + ': ' + el.d + ' - ' + el.a

        label.setAttribute("for","radio_dia_"+el.id)
        radio.setAttribute("type","radio")
        radio.setAttribute("id","radio_dia_"+el.id)
        radio.setAttribute("name","radio_dia")
        radio.setAttribute("value",el.id)

        div2.appendChild(radio)
        div2.appendChild(label)
        div2.appendChild(di)
        div3.appendChild(fecha_hora)
        div.appendChild(div2)
        div.appendChild(div3)
        fragment.appendChild(div)
    });
    horario[0].appendChild(fragment)
};

const vaciarHorarios = () => {
    const horario = document.getElementsByClassName("t_horario")
    while (horario[0].firstChild) {
        horario[0].removeChild(horario[0].firstChild)
    }
}

const renderServicios = (json) => {
    const select = document.getElementById("select_servicios")
    const fragment = document.createDocumentFragment();
    json.forEach(el => {
        const option = document.createElement("option")
        option.classList.add("select_opcion")
        option.setAttribute("value",el.id)
        option.dataset.id = el.id
        option.innerHTML = el.nombre
        fragment.appendChild(option)
    });
    select.appendChild(fragment)
};

const vaciarServicios = () => {
    const select = document.getElementById("select_servicios")
    while (select.firstChild) {
        select.removeChild(select.firstChild)
    }
    const option = document.createElement("option")
    option.setAttribute("value",0)
    option.innerHTML = 'Selecciona un servicio'
    select.appendChild(option)
}