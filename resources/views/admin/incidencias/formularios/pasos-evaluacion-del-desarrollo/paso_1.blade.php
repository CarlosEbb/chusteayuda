<div class="form-pasos mt-3">
    <h3>Datos personales del niño</h3>
    
    <div class="col-12 mt-3">
        <label for="nombre_completo" class="form-label mb-1">Nombres y apellidos del niño(a):</label>
        <input type="text" class="form-control p-3 border border-primary" name="nombre_completo" id="nombre_completo">
    </div>

    <div class="col-12 mt-3">
        <label for="apodo" class="form-label mb-1">¿Tiene algún apodo?:</label>
        <input type="text" class="form-control p-3 border border-primary" name="apodo" id="apodo">
    </div>

    <div class="row">
        <div class="col-12">
            <p>Sexo:</p>
        </div>
        <div class="col-12 col-md-6 mb-3 mb-md-5 card-check-reportes">
            <input class="form-check-input" hidden type="radio" name="sexo" value="M" id="M">
            <label class="form-check-label w-100  my-2 text-center h-100" for="M">Masculino</label>
        </div>
        <div class="col-12 col-md-6 mb-3 mb-md-5 card-check-reportes">
            <input class="form-check-input" hidden type="radio" name="sexo" value="F" id="F">
            <label class="form-check-label w-100  my-2 text-center h-100" for="F">Femenino</label>
        </div>
    </div>

    <div class="col-12 mt-3">
      <label for="fecha_nacimiento" class="form-label mb-1">Fecha de nacimiento:</label>
      <input type="date" class="form-control p-3 border border-primary required" name="fecha_nacimiento" id="fecha_nacimiento">
    </div>

    <div class="col-12 mt-3">
        <label for="edad_cronologica" class="form-label mb-1">Edad cronológica:</label>
        <input type="number" class="form-control p-3 border border-primary" name="edad_cronologica" id="edad_cronologica">
    </div>

    <div class="col-12 mt-3">
        <label for="diagnostico_inicial" class="form-label mb-1">Diagnóstico inicial:</label>
        <input type="text" class="form-control p-3 border border-primary" name="diagnostico_inicial" id="diagnostico_inicial">
    </div>
</div>