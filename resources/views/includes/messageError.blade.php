@foreach ( $errors->all() as $error)
  <div class="alert alert-danger alert-dismissible align-items-center position-fixed top-0 start-50 translate-middle-x z-index-2 storage" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {{$error}}
  </div>
@endforeach

@if(Session::has('mensaje'))
  <div class="alert alert-success alert-dismissible align-items-center position-fixed top-0 start-50 translate-middle-x z-index-2" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {{Session::get('mensaje')}}
  </div>
@endif
