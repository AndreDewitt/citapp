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

const renderHorarios = (json) => {
    const fragment = document.createDocumentFragment()
    console.log(json);
    json.forEach(el => {
        const tr = document.createElement("tr")
        const th = document.createElement("th")
        th.innerHTML = el.dia
    });

};

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