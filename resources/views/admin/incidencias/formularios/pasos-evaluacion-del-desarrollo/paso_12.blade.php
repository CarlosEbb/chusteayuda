@php
$esquema_tactil = [
'esquema_tactil_1' => array(
'titulo' => '¿Presenta dificultad al escribir?.',
'name' => 'presenta-dificultad-al-escribir',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_2' => array(
'titulo' => '¿Corta con tijeras?.',
'name' => 'corta-con-tijeras',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_3' => array(
'titulo' => '¿No demuestra preferencia por el uso de la mano derecha o izquierda, las utiliza aleatoriamente?.',
'name' => 'no-demuestra-preferencia-por-el-uso-de-la-mano-derecha-o-izquierda-las-utiliza-aleatoriamente',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_4' => array(
'titulo' => '¿No sostiene el papel cuando está escribiendo?.',
'name' => 'no-sostiene-el-papel-cuando-esta-escribiendo',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_5' => array(
'titulo' => '¿Sabe atarse los cordones de los zapatos?.',
'name' => 'sabe-atarse-los-cordones-de-los-zapatos',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_6' => array(
'titulo' => '¿Tiene dificultad para abotonar las caminas?.',
'name' => 'tiene-dificultad-para-abotonar-las-caminas',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_7' => array(
'titulo' => '¿utiliza correctamente los cubiertos al momento de comer?.',
'name' => 'utiliza-correctamente-los-cubiertos-al-momento-de-comer',
'detalle_value' => ['Si','No', 'A veces']
),

]
@endphp

<div class="form-pasos mt-3">
  <div class="row">
    <div class="col-12">
      <h3>Coordinación motriz</h3>
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
