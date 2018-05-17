@if(!empty(session('status')))
    {{--<div class="app-content content container-fluid ">--}}
        {{--<div class="content-wrapper">--}}
    <p></p>
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <div class="content-wrapper alert alert-{{session('status')}} alert-dismissible" role="alert" align="center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>{{session('record_info')}}
    </div>
    </div>
    <div class="col-md-4"></div>
        {{--</div>--}}
    {{--</div>--}}
@endif
