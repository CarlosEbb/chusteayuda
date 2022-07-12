@php
$esquema_tactil = [
'esquema_tactil_1' => array(
'titulo' => '¿Balancea su cuerpo o cabeza con frecuencia?.',
'name' => 'balancea-su-cuerpo-o-cabeza-con-frecuencia',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_2' => array(
'titulo' => '¿Es cuidadoso al agarrar objetos?.',
'name' => 'es-cuidadoso-al-agarrar-objetos',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_3' => array(
'titulo' => '¿Se le dificulta acomodar su cuerpo al cambiar de posición?.',
'name' => 'se-le-dificulta-acomodar-su-cuerpo-al-cambiar-de-posicion',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_4' => array(
'titulo' => '¿Muerde y/o mastica los objetos?.',
'name' => 'muerde-yo-mastica-los-objetos',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_5' => array(
'titulo' => '¿Agita sus brazos en el aire, da palmas o golpea sus pies contra el suelo?.',
'name' => 'agita-sus-brazos-en-el-aire-da-palmas-o-golpea-sus-pies-contra-el-suelo',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_6' => array(
'titulo' => '¿Camina sobre las puntas de los pies?.',
'name' => 'camina-sobre-las-puntas-de-los-pies',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_7' => array(
'titulo' => '¿Rechina o aprieta los dientes?.',
'name' => 'rechina-o-aprieta-los-dientes',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_8' => array(
'titulo' => '¿Se golpea?.',
'name' => 'se-golpea',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_9' => array(
'titulo' => '¿se tira contra las personas, el suelo o paredes para divertirse?.',
'name' => 'se-tira-contra-las-personas-el-suelo-o-paredes-para-divertirse',
'detalle_value' => ['Si','No', 'A veces']
),


]
@endphp

<div class="form-pasos mt-3">
  <div class="row">
    <div class="col-12">
      <h3>Esquema propioceptivo</h3>
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
