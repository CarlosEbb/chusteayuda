{{-- Registrar Materiales--}}
            
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">{{$titulo}}</h6>
                </div>
            </div>
            <div class="card-footer p-3">
                <form action="/materiales" method="POST" enctype="multipart/form-data"> @csrf
                    <div class="col-12">
                        <embed src="{{$material->archivo}}" type="application/pdf" width="100%" height="700px" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
