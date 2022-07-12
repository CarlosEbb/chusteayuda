@php
$esquema_tactil = [
'esquema_tactil_1' => array(
'titulo' => '¿Tiene dificultad para relacionarse con otros niños?.',
'name' => 'tiene-dificultad-para-relacionarse-con-otros-ninos',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_2' => array(
'titulo' => '¿Tiene dificultad para relacionarse con adultos?.',
'name' => 'tiene-dificultad-para-relacionarse-con-adultos',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_3' => array(
'titulo' => '¿Suele jugar solo y apartado?.',
'name' => 'suele-jugar-solo-y-apartado',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_4' => array(
'titulo' => '¿Se frustra con facilidad?.',
'name' => 'se-frustra-con-facilidad',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_5' => array(
'titulo' => '¿Puede llegar a ser terco y poco colaborador?.',
'name' => 'puede-llegar-a-ser-terco-y-poco-colaborador',
'detalle_value' => ['Si','No', 'A veces']
),
]
@endphp

<div class="form-pasos mt-3">
  <div class="row">
    <div class="col-12">
      <h3>Habilidades sociales</h3>
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
