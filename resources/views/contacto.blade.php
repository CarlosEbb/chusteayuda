@extends('layouts.app')
@section('content')

@include("includes.cardContacto")

@endsection

@section('js')

    <script>

        function cambiarValor() {
        // Obtén el elemento de entrada por su ID
        var inputElement = document.getElementById("mensaje_total");
        var inputElementNombre = document.getElementById("nombre");
        var inputElementMensaje = document.getElementById("mensaje");
        // Cambia el valor del elemento de entrada
        inputElement.value = "Me llamo: "+inputElementNombre.value+". "+inputElementMensaje.value;
        }

        document.getElementById("nombre").onchange = function() {
            cambiarValor();
        };

        document.getElementById("mensaje").onchange = function() {
            cambiarValor()
        };

    </script>
@endsection
