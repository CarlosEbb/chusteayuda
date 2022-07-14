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


<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>