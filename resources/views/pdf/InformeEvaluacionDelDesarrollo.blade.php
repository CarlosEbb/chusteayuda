{{-- {{$reporte}} --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Evaluación Inicial Seguridad Y Salud En El Trabajo</title>
  <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        color: rgb(39, 39, 39);
    }
    p{
        font-size: 12px;
    }
    table,
    th,
    td {
        border: 1px solid rgb(44, 44, 44);
        text-align: start;
        font-size: 11px;
    }
    td{
        padding: 1.4mm;
    }
    h3{
        text-align: center;
    }
    tr th{
        padding: 1.4mm;
    }
    .firma img{
        margin: 30px  250px;
    }

    .firma p{
        text-align: center;
    }
  </style>
</head>
<body>
  <table style="margin-bottom:13px;">
    <tr>
      <td width="80" style="text-align: center;">
        <img style="text-align: center;" src="" width="50" alt="logo cliente">
      </td>
      <td>
        <h3>INFORME DE EVALUACIÓN DEL DESARROLLO</h3>
      </td>
      <td width="80" style="text-align: center;">TEA- CB - 01<br> Versión 1 <br> 26/10/2021 </td>
    </tr>
  </table>

  <table style="margin-bottom:13px;">
    <tr>
      <th style="font-size:9; ">Fecha</th>
      <td>{{ $reporte->created_at->format('d/m/Y') }}</td>
      <th style="font-size:9; ">Hora</th>
      <td>{{ $reporte->created_at->format('H:i') }}</td>
    </tr>
    <tr>
      <th style="font-size:9;">Nombre De La Empresa</th>
      <td></td>
      <th style="font-size:9;">NIT</th>
      <td>{{$reporte->cliente->nit}}</td>
    </tr>
    <tr>
      <th style="font-size:9;">Número De Colaboradores</th>
      <td>{{$reporte->cliente->numero_trabajadores}}</td>
      <th style="font-size:9;">Nivel De Riesgo</th>
      <td>{{$reporte->cliente->clase_riesgo}}</td>
    </tr>
    <tr>
      <th style="font-size:9;">Actividad Económica</th>
      <td>{{$reporte->cliente->actividad_economica}}</td>
      <th style="font-size:9;">Dirección</th>
      <td>{{$reporte->cliente->direccion}}</td>
    </tr>
    
  </table>
</body>
</html>
