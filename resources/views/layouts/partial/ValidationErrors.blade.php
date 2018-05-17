@if($errors->any())
    <p></p>
    {{--<div class="app-content content container-fluid ">--}}
        <div class="col-md-4"></div>
        <div class="col-md-4">
    <div class="alert alert-danger alert-dismissible" role="alert" align="center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            @foreach($errors->all() as $error)
        </button>{{ $error }}
        <br/>
        @endforeach
    </div>
        </div>
        <div class="col-md-4"></div>
    {{--</div>--}}
@endif
