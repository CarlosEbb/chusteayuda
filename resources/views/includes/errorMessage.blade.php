@foreach ( $errors->all() as $error)
  <div class="alert alert-danger alert-dismissible text-white fade show" role="alert">
    <span class="alert-icon align-middle">
        <span class="material-icons text-md">
        thumb_up_off_alt
        </span>
    </span>
    <span class="alert-text"><strong>Error! </strong> {{$error}}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endforeach

@if(Session::has('mensaje'))
  <div class="alert alert-success alert-dismissible text-white fade show" role="alert">
    <span class="alert-icon align-middle">
        <span class="material-icons text-md">
        thumb_up_off_alt
        </span>
    </span>
    <span class="alert-text"><strong>Success! </strong> {{Session::get('mensaje')}}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
