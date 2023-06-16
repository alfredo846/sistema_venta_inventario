@extends('layouts.main')

@section('title', 'Categorías')

@section('head')

    <!--DataTables [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\datatables\media\css\dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets\plugins\datatables\extensions\Responsive\css\responsive.dataTables.min.css') }}"
        rel="stylesheet">

    <!--Animate.css [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\animate-css\animate.min.css') }}" rel="stylesheet">

@endsection


@section('content')
    {{-- {{ dump(request()->routeIs('categoria')) }}  --}}

    <div id="content-container">
        <div id="page-head">

            <!--Page Title-->
            <div id="page-title">
                <h1 class="page-header text-overflow text-center brand-text">Administración de Categorías</h1>
            </div>
        </div>


        <div id="page-content">

            <!-- Categorías -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <div class="row text-right">
                            <button id="demo-bootbox-custom-h-form" class="btn btn-primary">
                                <i class="fa fa-plus-square"> </i> Inserción Manual Categoría</button>
                            <button id="demo-bootbox-custom-h-form" class="btn btn-success min-tablet">
                                <i class="fa fa-file-excel-o"> </i> Inserción Excel Categoría</button>
                        </div>
                        <div class="row text-left">
                            <button id="demo-bootbox-custom-h-form" class="btn btn-success min-tablet">
                                <i class="fa fa-file-excel-o"> </i> Exportar excel</button>
                        </div>


                    </h3>
                </div><br><br>


                <div class="panel-body">
                    <table id="categoria" class="table table-striped table-bordered" cellspacing="10" width="90%">
                        <thead>
                            <tr>
                                <th>Categoría</th>
                                <th>Estado</th>
                                <th class="min-tablet">Acciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </div>

    </div>

@endsection


@section('script')

    <!--DataTables [ OPTIONAL ]-->
    <script src="{{ asset('assets\plugins\datatables\media\js\jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets\plugins\datatables\media\js\dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets\plugins\datatables\extensions\Responsive\js\dataTables.responsive.min.js') }}"></script>

    <!--DataTables Sample [ SAMPLE ]-->
    <script src="{{ asset('assets\js\demo\tables-datatables.js') }}"></script>

    <!--Bootbox Modals [ OPTIONAL ]-->
    <script src="{{ asset('assets\plugins\bootbox\bootbox.min.js') }}"></script>


    <!--Modals [ SAMPLE ]-->
    <script src="{{ asset('assets\js\demo\ui-modals.js') }}"></script>

    <!--Languaje [ DATATABLE ]-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#categoria').DataTable({
                "ajax": "{{ route('datatable.categoria') }}",
                "columns": [{
                        data: 'nombre'
                    },
                    {
                        "defaultContent": "<span class='badge badge-mint'>Activo</span> "
                    },
                    {
                        "defaultContent": "<button class='btn btn-info btn-icon'> <i class='fa fa-low-vision fa-1x'></i></button> <button class='btn btn-mint btn-icon'><i class='demo-psi-pen-5 icon-lg'></i></button> <button class='btn btn-danger btn-icon'><i class='demo-psi-recycling icon-lg'></i></button>"
                    },
                ],
                scrollY: 500,
                language: {
                    url: "{{ asset('assets/js/spanish.json') }}"
                }
            });
        });
    </script>


@endsection
