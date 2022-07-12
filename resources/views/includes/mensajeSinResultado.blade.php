<div class="container-sin-resultado">
  <img src="{{asset($urlImage)}}" class="mb-3 mt-5" height="250" width="250">
  <div class="container-sin-resultado-description mt-2">
    <h3 class="d-block">{{ $title }}</h3>
    @if ($showButton)  
      <a href="{{$urlButton}}" class="btn btn-primary rounded-pill mt-2">{{ $nameButton }}</a>
    @endif
  </div>
</div>