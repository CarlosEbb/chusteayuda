@php
$esquema_tactil = [
'esquema_tactil_1' => array(
'titulo' => '¿Evade el contacto físico?.',
'name' => 'evade-el-contacto-fisico',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_2' => array(
'titulo' => '¿Prefiere tocar a los demás que ser tocado?.',
'name' => 'prefiere-tocar-a-los-demas-que-ser-tocado',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_3' => array(
'titulo' => '¿Empuja a los demás?.',
'name' => 'empuja-a-los-demas',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_4' => array(
'titulo' => '¿Reacciona de manera exagerada cuando se le toca por sorpresa?.',
'name' => 'eacciona-de-manera-exagerada-cuando-se-le-toca-por-sorpresa',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_5' => array(
'titulo' => '¿Tolera tener las manos sucias?.',
'name' => 'tolera-tener-las-manos-sucias',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_6' => array(
'titulo' => '¿Juega con arena, plastilina, pinta con las manos?.',
'name' => 'juega-con-arena-plastilina-pinta-con-las-manos',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_7' => array(
'titulo' => '¿Tolera un corte de cabello?.',
'name' => 'tolera-un-corte-de-cabello',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_8' => array(
'titulo' => '¿Tolera el corte de uñas?.',
'name' => 'tolera-el-corte-de-unas',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_9' => array(
'titulo' => '¿Tolera lavarse los dientes?.',
'name' => 'tolera-lavarse-los-dientes',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_10' => array(
'titulo' => '¿Prefiere la ropa de un determinado tipo de tela?.',
'name' => 'prefiere-la-ropa-de-un-determinado-tipo-de-tela',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_11' => array(
'titulo' => '¿Le molesta las etiquetas de la ropa que viste?',
'name' => 'le-molesta-las-etiquetas-de-la-ropa-que-viste',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_12' => array(
'titulo' => '¿Evita caminar descalzo, particularmente sobre arena o pasto?.',
'name' => 'evita-caminar-descalzo-particularmente-sobre-arena-o-pasto',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_13' => array(
'titulo' => '¿parece ser muy sensible al recibir cosquillas?.',
'name' => 'parece-ser-muy-sensible-al-recibir-cosquillas',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_14' => array(
'titulo' => '¿su reacción al dolor suele ser exagerada?.',
'name' => 'su-reaccion-al-dolor-suele-ser-exagerada',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_15' => array(
'titulo' => '¿Exige que se le toque, le gustan los juegos bruscos?.',
'name' => 'exige-que-se-le-toque-le-gustan-los-juegos-bruscos',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_16' => array(
'titulo' => '¿Suele meterse la mano, partes de la ropa u objetos a la boca?.',
'name' => 'suele-meterse-la-mano-partes-de-la-ropa-u-objetos-a-la-boca',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_17' => array(
'titulo' => '¿Se desviste en cualquier lugar?.',
'name' => 'se-desviste-en-cualquier-lugar',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_18' => array(
'titulo' => '¿Parece no reaccionar al dolor físico?.',
'name' => 'parece-no-reaccionar-al-dolor-fisico',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_19' => array(
'titulo' => '¿Tiene dificultad para medir la fuerza, por ejemplo: acariciar?.',
'name' => 'tiene-dificultad-para-medir-la-fuerza-por-ejemplo-acariciar',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_20' => array(
'titulo' => '¿Se pellizca?.',
'name' => 'se-pellizca',
'detalle_value' => ['Si','No', 'A veces']
),

'esquema_tactil_21' => array(
'titulo' => '¿Se muerde?.',
'name' => 'se-muerde',
'detalle_value' => ['Si','No', 'A veces']
),
]
@endphp

<div class="form-pasos mt-3">
  <div class="row">
    <div class="col-12">
      <h3>Esquema táctil</h3>
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
