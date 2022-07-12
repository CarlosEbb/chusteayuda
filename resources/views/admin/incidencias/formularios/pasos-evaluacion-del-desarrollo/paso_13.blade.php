@php
$esquema_tactil = [
'esquema_tactil_1' => array(
'titulo' => '¿Suele ser demasiado agitado?.',
'name' => 'suele-ser-demasiado-agitado',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_2' => array(
'titulo' => '¿Suele ser agresivo?.',
'name' => 'suele-ser-agresivo',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_3' => array(
'titulo' => '¿se distrae fácilmente?.',
'name' => 'se-distrae-facilmente',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_4' => array(
'titulo' => '¿Tiene dificultad para calmarse?.',
'name' => 'tiene-dificultad-para-calmarse',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_5' => array(
'titulo' => '¿Tiene dificultad Para dormirse?.',
'name' => 'tiene-dificultad-para-dormirse',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_6' => array(
'titulo' => '¿se olvida de las cosas, los pierde?.',
'name' => 'se-olvida-de-las-cosas-los-pierde',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_7' => array(
'titulo' => '¿le resulta difícil aceptar cambios en su rutina?.',
'name' => 'le-resulta-dificil-aceptar-cambios-en-su-rutina',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_8' => array(
'titulo' => '¿necesita ayuda para empezar una nueva actividad?.',
'name' => 'necesita-ayuda-para-empezar-una-nueva-actividad',
'detalle_value' => ['Si','No', 'A veces']
),

]
@endphp

<div class="form-pasos mt-3">
  <div class="row">
    <div class="col-12">
      <h3>Organización</h3>
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
