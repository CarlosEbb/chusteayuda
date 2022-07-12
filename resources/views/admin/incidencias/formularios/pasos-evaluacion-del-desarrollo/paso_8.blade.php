@php
$esquema_tactil = [
'esquema_tactil_1' => array(
'titulo' => '¿Se ha diagnosticado alguna patología visual? (Si o No).',
'name' => 'se-ha-diagnosticado-alguna-patologia-visual-si-o-no',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_2' => array(
'titulo' => '¿Muestra sensibilidad a la luz?.',
'name' => 'muestra-sensibilidad-a-la-luz',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_3' => array(
'titulo' => '¿Se cubre los ojos con frecuencia?.',
'name' => 'se-cubre-los-ojos-con-frecuencia',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_4' => array(
'titulo' => '¿Se muestra más activo con la presencia de luces de colores?.',
'name' => 'se-muestra-mas-activo-con-la-presencia-de-luces-de-colores',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_5' => array(
'titulo' => '¿Se le dificulta centrar su vista en un objeto en específico?.',
'name' => 'se-le-dificulta-centrar-su-vista-en-un-objeto-en-especifico',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_6' => array(
'titulo' => '¿Le resulta seguir un objeto con los ojos?',
'name' => 'le-resulta-seguir-un-objeto-con-los-ojos',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_7' => array(
'titulo' => '¿Tiene dificultad para distinguir formas y colores?.',
'name' => 'tiene-dificultad-para-distinguir-formas-y-colores',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_8' => array(
'titulo' => '¿Evita el contacto visual?.',
'name' => 'evita-el-contacto-visual',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_9' => array(
'titulo' => '¿Invierte las estructuras, por ejemplo: (b/d), números (14/41) o palabras enteras (sal/las)?.',
'name' => 'invierte-las-estructuras-por-ejemplo-bd-numeros-1441-o-palabras-enteras-sallas',
'detalle_value' => ['Si','No', 'A veces']
),


]
@endphp

<div class="form-pasos mt-3">
  <div class="row">
    <div class="col-12">
      <h3>Esquema visual</h3>
    </div>
      @foreach ($esquema_tactil as $key => $item)
        <div class="col-12 col-md-12 col-lg-6">
          <p class="my-2 fs-6 fs-md-5">{{$esquema_tactil[$key]['titulo']}} </p>
        </div>
        @foreach ($esquema_tactil[$key]['detalle_value'] as $item)
          <div class="col-4 col-md-4 col-lg-2 mb-md-3 card-check-reportes">
            <input class="form-check-input required" hidden type="radio" name="detalle_{{$esquema_tactil[$key]['name']}}" value="{{$item}}" id="{{$esquema_tactil[$key]['name'].'_'.$item}}">
            <label class="form-check-label w-100  text-center h-100" for="{{$esquema_tactil[$key]['name'].'_'.$item}}">{{$item}}</label>
          </div>
        @endforeach
        <hr class="my-3">
      @endforeach
  </div>
</div>
