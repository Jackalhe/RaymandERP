@extends('layouts.Main')
@section('addcss')
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/vendors/css/sliders/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/vendors/css/extensions/pace.css">
    {{--<link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{url("")}}/css/jquery.dataTables.min.css">--}}
        <link rel="stylesheet" type="text/css" href="{{url("")}}/css/datatables.min.css">

@endsection

@section('content')
    @include('layouts.partial.ValidationErrors')
{{--    @include('Layouts.partial.MessageHandler')--}}
    <form action="" method="post">
        {{csrf_field()}}
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="dom">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{$form_title}}</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                            <li><a data-action="reload" onclick="location.href='{{isset($route_title) ? route("$route_title.index") : ''}}'"><i class="icon-reload"></i></a></li>
                                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body collapse in">
                                    <div class="card-block card-dashboard">
                                        {{--<p class="card-text">Events assigned to the table can be exceptionally useful for user interaction, however you must be aware that DataTables will add and remove rows from the DOM as they are needed (i.e. when paging only the visible elements are actually available in the DOM). As such, this can lead to the odd hiccup when working with events.</p>--}}
                                        @yield('OperationButton')
                                        <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="example" role="grid" width="100%" cellspacing="0" aria-describedby="DataTables_Table_0_info">
                                                        <thead>
                                                        <tr role="row">
                                                        @yield('TableHeader')
                                                        </tr>
                                                         </thead>
                                                        {{--<tfoot>--}}
                                                        {{--<tr>--}}
                                                            {{--<th>Name</th>--}}
                                                            {{--<th>Position</th>--}}
                                                            {{--<th>Office</th>--}}
                                                            {{--<th>Age</th>--}}
                                                            {{--<th>Start date</th>--}}
                                                            {{--<th>Salary</th>--}}
                                                        {{--</tr>--}}
                                                        {{--</tfoot>--}}
                                                        <tbody>
                                                        @yield('TableBody')
                                                        </tbody>
                                                    </table>
                                               </div>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>

            </div>
        </div>
    </div>
    </form>
@endsection


@section('addjs')

            {{--<script type="text/javascript" src="jquery.dataTables.js"></script>--}}
    <script src="{{url("")}}/js/jquery-1.12.4.js" type="text/javascript"></script>

    <script src="{{url("")}}/app-assets/vendors/js/ui/jquery-sliding-menu.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/vendors/js/sliders/slick/slick.min.js" type="text/javascript"></script>
    <script src="{{url("")}}/js/jquery-1.12.4.js" type="text/javascript"></script>
    <script src="{{url("")}}/js/datatables.min.js" type="text/javascript"></script>
            {{--<script src="{{url("")}}/js/jquery.dataTables.min.js" type="text/javascript"></script>--}}
    {{--<script src="{{url("")}}/app-assets/vendors/js/tables/jquery.dataTables.min.js" type="text/javascript"></script>--}}
    {{--<script src="{{url("")}}/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>--}}
    {{--<script src="{{url("")}}/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js" type="text/javascript"></script>--}}
    {{--<script src="{{url("")}}/app-assets/vendors/js/tables/buttons.flash.min.js" type="text/javascript"></script>--}}
    {{--<script src="{{url("")}}/app-assets/vendors/js/tables/jszip.min.js" type="text/javascript"></script>--}}
    {{--<script src="{{url("")}}/app-assets/vendors/js/tables/pdfmake.min.js" type="text/javascript"></script>--}}
    {{--<script src="{{url("")}}/app-assets/vendors/js/tables/vfs_fonts.js" type="text/javascript"></script>--}}
    {{--<script src="{{url("")}}/app-assets/vendors/js/tables/buttons.html5.min.js" type="text/javascript"></script>--}}
    {{--<script src="{{url("")}}/app-assets/vendors/js/tables/buttons.print.min.js" type="text/javascript"></script>--}}

    <script src="{{url("")}}/app-assets/js/scripts/ui/fullscreenSearch.min.js" type="text/javascript"></script>

    {{--<script src="{{url("")}}/app-assets/js/scripts/tables/datatables/datatable-advanced.min.js" type="text/javascript"></script>--}}

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#example').DataTable( {
//                        dom: 'Bfrtip',
//                        buttons: [
//                            'colvis',
//                            'excel',
//                            'print'
//                        ],
                        "language": {
                            "search": "@lang('messages.TableSearch')",
                            "paginate": {
                                "first":      "@lang('messages.First')",
                                "last":       "@lang('messages.Last')",
                                "next":       "@lang('messages.Next')",
                                "previous":   "@lang('messages.Previous')"
                            },
                            "lengthMenu": "@lang('messages.TableLengthMenu')",
                            "zeroRecords": "@lang('messages.TableZeroRecords')",
                            "info": "@lang('messages.TableInfo')",
                            "infoEmpty": "@lang('messages.TableInfoEmpty')",
                            "infoFiltered": "@lang('messages.TableInfoFiltered')"
                        }
//                    {
//                        "decimal":        "",
//                        "emptyTable":     "No data available in table",
//                        "info":           "Showing _START_ to _END_ of _TOTAL_ entries",
//                        "infoEmpty":      "Showing 0 to 0 of 0 entries",
//                        "infoFiltered":   "(filtered from _MAX_ total entries)",
//                        "infoPostFix":    "",
//                        "thousands":      ",",
//                        "lengthMenu":     "Show _MENU_ entries",
//                        "loadingRecords": "Loading...",
//                        "processing":     "Processing...",
//                        "search":         "Search:",
//                        "zeroRecords":    "No matching records found",
//                        "paginate": {
//                        "first":      "First",
//                            "last":       "Last",
//                            "next":       "Next",
//                            "previous":   "Previous"
//                    },
//                        "aria": {
//                        "sortAscending":  ": activate to sort column ascending",
//                            "sortDescending": ": activate to sort column descending"
//                    }
//                    }
                    });
                } );
            </script>
            <script>
                $('.btn_destroy').on('click', function () {
                    swal({
                        title:'@lang('messages.DeleteMessage')',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: '@lang('messages.DeleteButton')',
                        cancelButtonText: '@lang('messages.Cancel')',
                        closeOnConfirm: false
                    }).then((result) => {
                        if (result.value) {

                        this.parentElement.submit();

                    } else if (result.dismiss === 'cancel') {
                        //nothing
                    }
                });
                })
            </script>

            <script>
                $('.btn_destroy1').on('click', function () {
                    swal({
                        title:'@lang('messages.DeleteMessage')',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: '@lang('messages.DeleteButton')',
                        cancelButtonText: '@lang('messages.Cancel')',
                        closeOnConfirm: false
                    }).then((result) => {
                        if (result.value) {

                        this.parentElement.submit();

                    } else if (result.dismiss === 'cancel') {
                        //nothing
                    }
                });
                })
            </script>
    {{--<script>--}}
        {{--(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
            {{--(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
            {{--m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
        {{--})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');--}}

        {{--ga('create', 'UA-96096445-1', 'auto');--}}
        {{--ga('send', 'pageview');--}}

    {{--</script>--}}
@endsection
