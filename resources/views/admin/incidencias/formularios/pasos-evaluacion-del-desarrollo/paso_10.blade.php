@php
$esquema_tactil = [
'esquema_tactil_1' => array(
'titulo' => '¿Rechaza los alimentos por su textura?.',
'name' => 'rechaza-los-alimentos-por-su-textura',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_2' => array(
'titulo' => '¿Requiere que se le sirva una comida en específico?.',
'name' => 'requiere-que-se-le-sirva-una-comida-en-especifico',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_3' => array(
'titulo' => '¿Mastica?.',
'name' => 'mastica',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_4' => array(
'titulo' => '¿Mastica o lame objetos que no son comida?.',
'name' => 'mastica-o-lame-objetos-que-no-son-comida',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_5' => array(
'titulo' => '¿Necesita ayuda al comer?.',
'name' => 'necesita-ayuda-al-comer',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_6' => array(
'titulo' => '¿Tiende a comer de una manera descuidada?.',
'name' => 'tiende-a-comer-de-una-manera-descuidada',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_7' => array(
'titulo' => '¿Babea?.',
'name' => 'babea',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_8' => array(
'titulo' => '¿Presenta dificultad para tragar?.',
'name' => 'presenta-dificultad-para-tragar',
'detalle_value' => ['Si','No', 'A veces']
),

]
@endphp

<div class="form-pasos mt-3">
  <div class="row">
    <div class="col-12">
      <h3>Alimentación</h3>
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
