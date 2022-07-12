@php
$esquema_tactil = [
'esquema_tactil_1' => array(
'titulo' => '¿Tiene miedo de caerse?.',
'name' => 'tiene-miedo-de-caerse',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_2' => array(
'titulo' => '¿Evita trepar y/o saltar?',
'name' => 'evita-trepar-yo-saltar',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_3' => array(
'titulo' => '¿Disfrutar jugar en el columpio?.',
'name' => 'disfrutar-jugar-en-el-columpio',
'detalle_value' => ['Si','No', 'A veces']
),


'esquema_tactil_4' => array(
'titulo' => '¿Le tiene miedo a los ascensores y escaleras eléctricas?.',
'name' => 'le-tiene-miedo-a-los-ascensores-y-escaleras-electricas',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_5' => array(
'titulo' => '¿Se muestra reacio a juegos que implican movimiento?.',
'name' => 'se-muestra-reacio-a-juegos-que-implican-movimiento',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_6' => array(
'titulo' => '¿Cuándo se cae se golpea la cara?.',
'name' => 'cuando-se-cae-se-golpea-la-cara',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_7' => array(
'titulo' => '¿Pierde el equilibrio con facilidad?.',
'name' => 'pierde-el-equilibrio-con-facilidad',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_8' => array(
'titulo' => '¿Se le dificulta subir escaleras?.',
'name' => 'se-le-dificulta-subir-escaleras',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_9' => array(
'titulo' => '¿Se le dificulta bajar escaleras?.',
'name' => 'se-le-dificulta-bajar-escaleras',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_10' => array(
'titulo' => '¿Se cae con frecuencia?.',
'name' => 'se-cae-con-frecuencia',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_11' => array(
'titulo' => '¿Le gusta hacer volteretas?.',
'name' => 'le-gusta-hacer-volteretas',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_12' => array(
'titulo' => '¿Se balancea cuando está sentado en la silla?.',
'name' => 'se-balancea-cuando-esta-sentado-en-la-silla',
'detalle_value' => ['Si','No', 'A veces']
),

]
@endphp

<div class="form-pasos mt-3">
  <div class="row">
    <div class="col-12">
      <h3>Esquema vestibular</h3>
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
