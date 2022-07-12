@php
$esquema_tactil = [
'esquema_tactil_1' => array(
'titulo' => '¿Al caminar parece demasiado rígido?.',
'name' => 'al-caminar-parece-demasiado-rigido',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_2' => array(
'titulo' => '¿Al caminar parece estar flácido?.',
'name' => 'al-caminar-parece-estar-flacido',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_3' => array(
'titulo' => '¿Parece tener más fuerza que otros niños de su edad?.',
'name' => 'parece-tener-mas-fuerza-que-otros-ninos-de-su-edad',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_4' => array(
'titulo' => '¿Parece ser más débil que otros niños de su edad?.',
'name' => 'parece-ser-mas-debil-que-otros-ninos-de-su-edad',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_5' => array(
'titulo' => '¿Encorva la espalda al sentarse?.',
'name' => 'encorva-la-espalda-al-sentarse',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_6' => array(
'titulo' => '¿Es exageradamente delicado al agarrar objetos?.',
'name' => 'es-exageradamente-delicado-al-agarrar-objetos',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_7' => array(
'titulo' => '¿Es exageradamente brusco al agarrar objetos?.',
'name' => 'es-exageradamente-brusco-al-agarrar-objetos',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_8' => array(
'titulo' => '¿Se cansa fácilmente?.',
'name' => 'se-cansa-facilmente',
'detalle_value' => ['Si','No', 'A veces']
),


]
@endphp

<div class="form-pasos mt-3">
  <div class="row">
    <div class="col-12">
      <h3>Tonicidad muscular</h3>
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
