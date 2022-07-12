@php
$esquema_tactil = [
'esquema_tactil_1' => array(
'titulo' => '¿Se le ha diagnosticado alguna patología auditiva? (Si o No).',
'name' => 'se-le-ha-diagnosticado-alguna-patologia-auditiva-si-o-no',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_2' => array(
'titulo' => '¿Se le dificulta mantenerse concentrado en ambientes ruidosos?.',
'name' => '¿Se le ha diagnosticado alguna patología auditiva? (Si o No).',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_3' => array(
'titulo' => '¿Le molestan los sonidos fuertes?.',
'name' => 'le-molestan-los-sonidos-fuertes',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_4' => array(
'titulo' => '¿Habla alto o grita con frecuencia?.',
'name' => 'habla-alto-o-grita-con-frecuencia',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_5' => array(
'titulo' => '¿Le da miedo algún tipo de sonidos?.',
'name' => 'le-da-miedo-algun-tipo-de-sonidos',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_6' => array(
'titulo' => '¿Tiene dificultad para entender las instrucciones verbales?.',
'name' => 'tiene-dificultad-para-entender-las-instrucciones-verbales',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_7' => array(
'titulo' => '¿Confunde las palabras que suenen de una manera similar?.',
'name' => 'confunde-las-palabras-que-suenen-de-una-manera-similar',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_8' => array(
'titulo' => '¿Parece no escuchar cuando se le habla?.',
'name' => 'parece-no-escuchar-cuando-se-le-habla',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_9' => array(
'titulo' => '¿Su reacción a sonidos inesperados es negativa, por ejemplo: la licuadora, aspiradora?.',
'name' => 'su-reaccion-a-sonidos-inesperados-es-negativa-por-ejemplo-la-licuadora-aspiradora',
'detalle_value' => ['Si','No', 'A veces']
),


]
@endphp

<div class="form-pasos mt-3">
  <div class="row">
    <div class="col-12">
      <h3>Esquema auditivo</h3>
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
