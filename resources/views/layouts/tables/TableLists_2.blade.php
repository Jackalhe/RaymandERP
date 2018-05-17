@extends('layouts.Main')
@section('addcss')
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/vendors/css/sliders/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/vendors/css/extensions/pace.css">
    <link rel="stylesheet" type="text/css" href="{{url("")}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                    {{--<h2 class="content-header-title">{{$form_title}}</h2>--}}
                </div>

            </div>
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
                                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body collapse in">
                                    <div class="card-block card-dashboard">
                                        {{--<p class="card-text">Events assigned to the table can be exceptionally useful for user interaction, however you must be aware that DataTables will add and remove rows from the DOM as they are needed (i.e. when paging only the visible elements are actually available in the DOM). As such, this can lead to the odd hiccup when working with events.</p>--}}
                                           <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                        <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 134px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 216px;" aria-label="Position: activate to sort column ascending">Position</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Office: activate to sort column ascending">Office</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 38px;" aria-label="Age: activate to sort column ascending">Age</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 89px;" aria-label="Start date: activate to sort column ascending">Start date</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 84px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr></tbody>
                                                        <tfoot>
                                                        <tr>
                                                            <th rowspan="1" colspan="1">Name</th>
                                                            <th rowspan="1" colspan="1">Position</th>
                                                            <th rowspan="1" colspan="1">Office</th>
                                                            <th rowspan="1" colspan="1">Age</th>
                                                            <th rowspan="1" colspan="1">Start date</th>
                                                            <th rowspan="1" colspan="1">Salary</th>
                                                        </tr>
                                                        </tfoot>
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
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection


@section('addjs')

            {{--<script type="text/javascript" src="jquery.dataTables.js"></script>--}}


    <script src="{{url("")}}/app-assets/vendors/js/ui/jquery-sliding-menu.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/vendors/js/sliders/slick/slick.min.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/vendors/js/tables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/vendors/js/tables/buttons.flash.min.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/vendors/js/tables/jszip.min.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/vendors/js/tables/pdfmake.min.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/vendors/js/tables/vfs_fonts.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/vendors/js/tables/buttons.html5.min.js" type="text/javascript"></script>
    <script src="{{url("")}}/app-assets/vendors/js/tables/buttons.print.min.js" type="text/javascript"></script>

    <script src="{{url("")}}/app-assets/js/scripts/ui/fullscreenSearch.min.js" type="text/javascript"></script>

    <script src="{{url("")}}/app-assets/js/scripts/tables/datatables/datatable-advanced.min.js" type="text/javascript"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#example').dataTable( {
                        "language": {
                            "url": "dataTables.german.lang"
                        }
                    } );
                } );
            </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-96096445-1', 'auto');
        ga('send', 'pageview');

    </script>
@endsection
