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
                <div class="content">
                    @include('layouts.partials.alerts')
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <div class="row text-right">
                            <button class="btn btn-primary min-tablet" type="button" data-toggle="modal"
                                data-target="#agregarcategoria">
                                <i class="fa fa-plus-square"> </i> Agregar Categoría</button>
                            </button>

                            <button class="btn btn-success min-tablet">
                                <i class="fa fa-file-excel-o"> </i> Inserción Excel Categoría</button>

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
                    <table id="categoria" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Categoría</th>
                                <th>Imagen</th>
                                <th>Estado</th>
                                <th class="min-tablet">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->nombre }}</td>
                                    <td>
                                        <img src="{{ asset('imagenes/categorias/' . $categoria->imagen) }}"
                                            class="profile-image" alt="Imagen categoría">
                                    </td>
                                    <td><span class='badge badge-mint'>Activo</span></td>
                                    <td>
                                        <button class="btn btn-dark btn-icon" data-toggle="modal"
                                            data-target="#showcategoria{{ $categoria->categoria_id }}"
                                            data-original-title=""><i class="ion-eye icon-lg"></i>
                                        </button>

                                        <button type="button" class='btn btn-primary btn-icon' data-toggle='modal'
                                            data-target='#editcategoria{{ $categoria->categoria_id }}'>
                                            <i class='demo-psi-pen-5 icon-md'></i></button>

                                        <button class='btn btn-danger btn-icon'><i
                                                class='demo-psi-recycling icon-md'></i></button>
                                    </td>
                                </tr>

                                @include('categorias.show')

                                @include('categorias.edit')
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

            <!--Start del modal Inserción Manual Categoria-->
            <div class="modal fade" id="agregarcategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-primary" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-bold text-light text-center">Agregar Categoría</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-times fa-1x text-bold text-light"></i></span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="{{ route('categorias.store') }}" method="post" enctype="multipart/form-data"
                                class="form-horizontal">
                                @csrf
                                @method('POST')
                                @include('categorias.create')
                            </form>
                        </div>

                    </div>
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
                "order": [
                    [2, "desc"]
                ],
                language: {
                    url: "{{ asset('assets/js/spanish.json') }}"
                }
            });
        });
    </script>

    {{-- --------------Borrar datos del formulario cada vez que se cierre un modal --------------- --}}
    <script>
        $('.modal').on('hidden.bs.modal', function() {
            $(this).find('form')[0].reset(); //para borrar todos los datos que tenga los input, textareas, select.
            $("label.error").remove(); // para borrar la etiqueta de error del jquery validate
            $('#img').removeAttr('src');
            img.src = 'imagenes/categorias/shadow.jpg';
        });
    </script>

    {{-- --------------Previsualizar imagen en el formulario de create --------------- --}}
    <script type="text/javascript">
        const defaultFile = 'imagenes/categorias/shadow.jpg';

        const file = document.getElementById('imagen');
        const img = document.getElementById('img');
        file.addEventListener('change', e => {
            if (e.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    img.src = e.target.result;
                }
                reader.readAsDataURL(e.target.files[0])
            } else {
                img.src = defaultFile;
            }
        });
    </script>

    {{-- --------- Abrir modales de acuerdo a las validaciones ------- --}}
    @if (!$errors->isEmpty())
        @if ($errors->has('post'))
            <script>
                $(function() {
                    $('#agregarcategoria').modal('show');
                });
            </script>
        @else
            <script>
                $(function() {
                    $('#editcategoria{{ $categoria->categoria_id }}').modal('show');
                });
            </script>
        @endif
    @endif


    {{-- --------- Personalización del tiempo en que se muestran las alertas ------- --}}
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".content").fadeOut(1500);
            }, 3000);
        });
    </script>

    <script type="text/javascript">
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>




@endsection
