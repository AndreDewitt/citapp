<div id="modal" class="modal modal-ocultar">
    <div class="contenedor-modal">
        <div class="titulo txt-center">
            <h4 id="h1_nombre_negocio"></h4>
        </div>
        <form id="agendar-cita">
            <div class="pag-1">
                <div class="seleccion">
                    <h5>Selecciona un servicio</h5>
                    <select name="select_servicios" id="select_servicios" class="select_servicios form-control">
                        <option value="0">Selecciona un servicio</option>
                    </select>
                </div>
                <div class="fecha-hora">
                    <div class="titulo">
                        <h5>Selecciona la hora y fecha deseada</h5>
                    </div>
                    <div class="t_horario">
                    </div>
                </div>
            </div>
            <div class="pag-2 pag-ocultar">
                <label for="nombre">Nombre completo</label>
                <input class="form-control" type="text" name="nombre" id="nombre">
                <label for="correo">Correo electrónico</label>
                <input class="form-control" type="text" name="correo" id="correo">
                <label for="tel">Número telefónico</label>
                <input class="form-control" type="text" name="tel" id="tel">
                <input class="form-control" type="number" name="aux" id="aux"  hidden="">
            </div>
            <div class="opciones">
                <span class="btn btn-azul btn-anterior btn-oculto">Anterior</span>
                <span class="btn btn-azul btn-siguiente ">Siguiente</span>
                <button class="btn btn-verde btn-finalizar btn-oculto">Finalizar</button>
                <span class="btn btn-rojo btn-cerrar">Cancelar</span>
            </div>
        </form>
    </div>
</div>