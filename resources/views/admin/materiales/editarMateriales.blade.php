@extends('layouts.appAdmin')

@section('content')

<div class="card card-plain mb-">
    <div class="card-body p-3">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                    <h1 class="font-weight-bolder mb-0">Materiales</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 position-relative z-index-2">
        <div class="row">
            <div class="col-sm-6 col-12">
                {!! Form::model($material, ['route' => ['materiales.update', $material->id], 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
                    @include('admin.materiales.datosMateriales', ['titulo' => 'Editar'])
                {!! Form::close() !!}
            </div>
            <div class="col-sm-6 col-12">
                @include('admin.materiales.viewDocument', ['titulo' => 'Ver Material'])
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('js/sidebars.js') }}"></script>
@endsection
