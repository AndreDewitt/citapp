let funcionEnviada = ''

const remove_not = (tipo) => {
    const not = document.getElementsByClassName(tipo)
    document.body.removeChild(not[0])
}

const render_buttons = (tipo) => {
    const div = document.createElement('div')
    const btn_aceptar = document.createElement('button')
    const btn_cancelar = document.createElement('button')
    
    div.classList.add('row-con')
    div.classList.add('con-w12')
    div.classList.add('justify-right')
    btn_aceptar.classList.add('btn')
    btn_aceptar.classList.add('btn'+tipo+'-aceptar')
    btn_aceptar.classList.add('btn-azul')
    btn_aceptar.innerHTML = 'Aceptar'

    btn_cancelar.classList.add('btn')
    btn_cancelar.classList.add('btn'+tipo+'-cancelar')
    btn_cancelar.classList.add('btn-rojo')
    btn_cancelar.innerHTML = 'Cancelar'
    
    div.appendChild(btn_aceptar)
    div.appendChild(btn_cancelar)
    return div
}

const render_form = () => {
    const form = document.createElement('form')
    const input = document.createElement('input')
    form.setAttribute('id','form_not_promt')
    form.classList.add('form_not_promt')
    input.setAttribute('id','input_promt')
    input.setAttribute('name','input_promt')
    input.classList.add('form-control')
    form.appendChild(input)
    return form
}

const render_not_cont = (clase) => {
    const not_alert = document.createElement('div')
    not_alert.classList.add('notification')
    not_alert.classList.add('not-descripction')
    not_alert.classList.add(clase)
    return not_alert
}

const render_cont = () => {
    const con_not = document.createElement('div')
    con_not.classList.add('con')
    con_not.classList.add('con-round')
    con_not.classList.add('con-w5')
    return con_not
}

const render_not = (tipo) => {
    if (tipo === 'alert') {
        return render_not_cont('alert')
    } else if (tipo == 'confirm') {
        const not = render_not_cont('confirm')
        not.classList.add('not-open')
        return not
    } else if (tipo == 'promt') {
        const not =  render_not_cont('promt')
        not.classList.add('not-open')
        return not
    }
}

const render_title = (titulo) => {
    const h = document.createElement('h4')
    h.innerHTML = titulo
    h.classList.add('txt-center')
    return h
}

const render_description = (descripcion,clase) => {
    const p = document.createElement('p')
    p.innerHTML = descripcion
    p.classList.add('not-description-text')
    if (clase === 'alert') {
        p.classList.add('txt-center')
    } else {
        p.classList.add('txt-justify')
    }
    return p
}

const time_notification = (not) => {
    document.body.appendChild(not)
    window.setTimeout(() => {
        not.classList.add('not-open')
    },300)
    window.setTimeout(() => {
        not.classList.remove('not-open')
    },2500)
    window.setTimeout(() => {
        document.body.removeChild(not)
    },2800)
}

const render_alert_sm = (titulo,posicion) => {
    const not = render_not('alert-sm')
    const cont = render_cont()
    const title = render_title(titulo)
}

const render_alert_description = (titulo,descripcion) => {
    const not = render_not('alert')
    const cont = render_cont()
    const title = render_title(titulo)
    const description = render_description(descripcion,'alert')
    cont.appendChild(title)
    cont.appendChild(description)
    not.appendChild(cont)
    time_notification(not)
}

const render_confirm_description = (titulo, descripcion, callback) => {
    const not = render_not('confirm')
    const cont = render_cont()
    const title = render_title(titulo)
    const description = render_description(descripcion,'confirm')
    const buttons = render_buttons('-confirm')
    cont.appendChild(title)
    cont.appendChild(description)
    cont.appendChild(buttons)
    not.appendChild(cont)
    document.body.appendChild(not)
    funcionEnviada = callback;
}

const render_promt_description = (titulo, pregunta) => {
    const not = render_not('promt')
    const cont = render_cont()
    const title = render_title(titulo)
    const description = render_description(pregunta)
    const form = render_form()
    const buttons = render_buttons('-promt')
    cont.appendChild(title)
    cont.appendChild(description)
    cont.appendChild(form)
    cont.appendChild(buttons)
    not.appendChild(cont)
    document.body.appendChild(not)
}

const render_confirm_sm = (titulo,posicion) => {
    const div = document.createElement('div')
    const div2 = document.createElement('div')
    const div3 = document.createElement('div')
    const h5 = document.createElement('h5')
    const btn1 = document.createElement('button')
    const btn2 = document.createElement('button')
    div.classList.add('notification')
    div.classList.add('not')
    div.classList.add('not-open')
    div.classList.add('not-'+posicion)
    div.classList.add('confirm')
    div2.classList.add('row-con')
    div2.classList.add('con')
    div2.classList.add('con-round')
    div2.classList.add('con-w5')
    div3.classList.add('row-con')
    div3.classList.add('con-w6')
    div3.classList.add('justify-right')
    h5.classList.add('txt-left')
    h5.classList.add('con-w6')
    h5.innerHTML = titulo
    btn1.classList.add('btn')
    btn1.classList.add('btn-confirm-sm-aceptar')
    btn1.classList.add('btn-icon-self')
    btn1.classList.add('btn-azul')
    btn1.classList.add('material-icons')
    btn1.innerHTML = 'done'
    btn2.classList.add('btn')
    btn2.classList.add('btn-confirm-sm-cancelar')
    btn2.classList.add('btn-icon-self')
    btn2.classList.add('btn-rojo')
    btn2.classList.add('material-icons')
    btn2.innerHTML = 'close'
    div3.appendChild(btn1)
    div3.appendChild(btn2)
    div2.appendChild(h5)
    div2.appendChild(div3)
    div.appendChild(div2)
    document.body.appendChild(div)
}

const open_alert = (titulo,descripcion) => {
    render_alert_description(titulo,descripcion)    
}

const open_alert_sm = (titulo,posicion) => {
    const div = document.createElement('div')
    const div2 = document.createElement('div2')
    const h5 = document.createElement('h5')
    div.classList.add('notification')
    div.classList.add('not')
    div.classList.add('not-'+posicion)
    div.classList.add('alert')
    div2.classList.add('con')
    div2.classList.add('con-round')
    div2.classList.add('con-w5')
    h5.classList.add('txt-center')
    h5.innerHTML = titulo
    div2.appendChild(h5)
    div.appendChild(div2)
    time_notification(div)
}

const open_confirm = (titulo,descripcion,callback) => {
    render_confirm_description(titulo,descripcion,callback)
}

const open_confirm_sm = (titulo,posicion,callback) => {
    render_confirm_sm(titulo,posicion)
    funcionEnviada = callback;
}

document.addEventListener('click', e => {
    if(e.target.matches('.btn-confirm-aceptar')) {
        funcionEnviada();
    } else if (e.target.matches('.btn-confirm-cancelar')) {
        const not = document.getElementsByClassName('confirm')
        window.setTimeout(() => {
            not[0].classList.remove('not-open')
        },100)
        window.setTimeout(() => {
            document.body.removeChild(not[0])
        },500)
    }  else if (e.target.matches('.btn-confirm-sm-aceptar')) {
        funcionEnviada();
    } else if (e.target.matches('.btn-confirm-sm-cancelar')) {
        const not = document.getElementsByClassName('confirm')
        window.setTimeout(() => {
            not[0].classList.remove('not-open')
        },100)
        window.setTimeout(() => {
            document.body.removeChild(not[0])
        },500)
    }
});