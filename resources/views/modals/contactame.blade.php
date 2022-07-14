<!-- Contactame -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="#modal_contactame" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal_contactame">Contáctame</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {!! Form::open(['route'=>'contacto', 'method'=>'POST', 'class'=>'', 'files' => true, 'id' => 'form_contactame', 'role' => 'form']) !!}
                <div class="mb-3 ">
                <label for="nombre" class="form-label mb-1">Nombre completo</label>
                    <input type="text" class="form-control p-3 border border-primary" name="nombre" id="nombre" placeholder="Nombre y apellido">
                </div>

                <div class="mb-3 ">
                    <label for="correo-electronico" class="form-label mb-1">Correo electrónico</label>
                    <input type="email" class="form-control p-3 border border-primary" name="email" id="correo-electronico"
                        placeholder="name@example.com">
                </div>

                <div class="mb-3 ">
                    <label for="asunto" class="form-label mb-1">Asunto</label>
                    <input type="text" class="form-control p-3 border border-primary" name="asunto" id="asunto" placeholder="Asunto">
                </div>

                <div class="mb-3 ">
                    <label for="mensaje" class="form-label mb-1">Mensaje</label>
                    <textarea class="form-control p-3 border border-primary" name="mensaje" id="mensaje" rows="4"></textarea>
                </div>
            {!! Form::close() !!}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button form="form_contactame" type="submit" class="btn btn-primary">Enviar mensaje</button>
        </div>
        </div>
    </div>
</div>