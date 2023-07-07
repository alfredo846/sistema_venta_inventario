@extends('layouts.main')

@section('title', 'Categorías')

@section('head')

    <!--DataTables [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\datatables\media\css\dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets\plugins\datatables\extensions\Responsive\css\responsive.dataTables.min.css') }}"
        rel="stylesheet">

    <!--Animate.css [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\animate-css\animate.min.css') }}" rel="stylesheet">

    <!--Themify Icons [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\themify-icons\themify-icons.min.css') }}" rel="stylesheet">

@endsection


@section('content')
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
                <div class="content">
                    @include('layouts.partials.alerts')
                </div>

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <div class="row text-right">
                            <a href="{{ route('categorias.create') }}">
                                <button class="btn btn-primary min-tablet" type="button">
                                    <i class="fa fa-plus-square"> </i> Agregar Categoría</button>
                                </button></a>

                            <button class="btn btn-success min-tablet">
                                <i class="fa fa-file-excel-o"> </i> Inserción Excel</button>
                        </div>
                        <div class="row text-left">
                            <button class="btn btn-success btn-icon btn-circle add-tooltip" data-toggle="tooltip"
                                data-container="body" data-placement="top" data-original-title="Exportar Excel"><i
                                    class="fa fa-file-excel-o fa-md"></i></button>

                            <button class="btn btn-danger btn-icon btn-circle add-tooltip" data-toggle="tooltip"
                                data-container="body" data-placement="top" data-original-title="Exportar PDF"><i
                                    class="fa fa-file-pdf-o fa-md"></i></button>
                        </div>
                    </h3>
                </div><br><br>

                <div class="panel-body">
                    <table id="categorias" class="table table-striped table-bordered display responsive no-wrap"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Categoría</th>
                                <th>Imagen</th>
                                <th class="min-tablet">Estado</th>
                                <th class="min-tablet">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->nombre }}</td>
                                    <td>
                                        <img src="{{ asset('imagenes/categorias/' . $categoria->imagen) }}"
                                            class="profile-image upload-box" alt="Imagen categoría">
                                    </td>
                                    <td><span class='badge badge-mint'>Activo</span></td>
                                    <td>
                                        <button class="btn btn-dark btn-icon" data-toggle="modal"
                                            data-target="#showcategoria{{ $categoria->categoria_id }}"
                                            data-original-title=""><i class="ion-eye icon-lg"></i>
                                        </button>

                                        <button type="button" class='btn btn-primary btn-icon' data-toggle='modal'
                                            data-target='#actualizarcategoria{{ $categoria->categoria_id }}'>
                                            <i class='demo-psi-pen-5 icon-md'></i></button>

                                        <button class='btn btn-danger btn-icon'><i
                                                class='demo-psi-recycling icon-md'></i></button>
                                    </td>
                                </tr>
                                @include('categorias.show')
                            @endforeach
                        </tbody>
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
            $('#categorias').DataTable({
                "order": [
                    [2, "desc"]
                ],
                language: {
                    url: "{{ asset('assets/js/spanish.json') }}"
                }
            });
        });
    </script>


    {{-- configuración del tiempo  en que aparece la alerta --}}
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".content").fadeOut(1500);
            }, 3000);
        });
    </script>


@endsection
