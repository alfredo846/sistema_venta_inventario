@extends('layouts.main')

@section('title', 'Actualizar Categoría')

@section('head')

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
                <h1 class="page-header text-overflow text-center brand-text">CATEGORÍA DE LOS PRODUCTOS</h1>
            </div>
        </div><br>&nbsp;

        <div id="page-content">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-5">
                    <div class="panel">
                        <form action="{{ route('categorias.update', $categoria) }}" method="post"
                            enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="panel-body create">
                                <div class="panel-heading">
                                    <h3 class="panel-title">ACTUALIZAR CATEGORÍA</h3>
                                </div>
                                <div class="form-group">
                                    <label for="nombre"
                                        class="col-sm-3 control-label text-semibold is-required">Categoría</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nombre" id="nombre" class="nombre form-control"
                                            placeholder="Nombre de categoría" autocomplete="off" maxlength="30"
                                            value={{ $categoria->nombre }}>
                                        <span></span>
                                        <div class="alertarequest">
                                            @if ($errors->first('nombre'))
                                                <div class="invalid-feedback">
                                                    <i>{{ $errors->first('nombre') }}</i>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="imagen"
                                        class="col-sm-3 control-label text-semibold"><em>Imagen</em></label>
                                    <div class="col-sm-8" for="imagen">
                                        <label for="imagen">
                                                <img class='mg-lg mar-ver img-preview' id="img"
                                                    src="{{ asset('imagenes/categorias/' . $categoria->imagen) }}"
                                                    alt="Seleccione una imagen para está categoría.">
                                        </label>

                                        <div class="alertarequest">
                                            @if ($errors->first('imagen'))
                                                <div class="invalid-feedback">
                                                    <i>{{ $errors->first('imagen') }}</i>
                                                </div>
                                            @endif
                                        </div>
                                        <input type="file" placeholder="Coloque la imagen" name="imagen" id="imagen"
                                            class="upload-box" accept="image/png,image/jpeg,image/jpg,image/jfif">
                                        <span></span>
                                    </div>
                                </div><br>

                                <div class="modal-footer col-sm-12 text-right">
                                    <label class="col-sm-1 control-label text-semibold">
                                        <a href="{{ route('categorias.index') }}"
                                            class="text-left fs-6 text-secundario add-tooltip" data-toggle="tooltip"
                                            data-container="body" data-placement="top" data-original-title=""><img
                                                src="{{ asset('assets/img/regresar.jpg') }}" width="34"
                                                height="34"></a></label>
                                    <button type="submit" id="guardar" class="btn btn-mint text-center"
                                        onclick="this.disabled=true;this.value='Enviando.. .';this.form.submit();"><i
                                            class="fa fa-save fa-1x"></i>
                                        Actualizar</button>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection


@section('script')
    <script src="{{ asset('assets\js\demo\ui-modals.js') }}"></script>

    {{-- --------------------------------- Validacion de formulario --------------------- --}}
    <script src="{{ asset('assets\js\form-validation.js') }}"></script>

    {{-- --------------Previsualizar imagen en el formulario de actualizar --------------- --}}
    <script type="text/javascript">
        const defaultFile = "{{ asset('imagenes/categorias/' . $categoria->imagen) }}";
        const file = document.getElementById('imagen');
        const img = document.getElementById('img');
        file.addEventListener('change', e => {
            if (e.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    img.src = e.target.result;
                    document.getElementById("img").removeAttribute("class");
                    img.setAttribute("class", "mg-lg mar-ver img-preview");
                }
                reader.readAsDataURL(e.target.files[0])
            } else {
                img.src = defaultFile;
            }
        });
    </script>


    {{-- Desactivar el boton despues de ser enviado --}}
    <script type="text/javascript">
        $('#guardar').click(function(e) {
            // document.getElementById('guardar').disabled=true
            setTimeout(function() {
                document.getElementById('guardar').disabled = false
            }, 3000);
        });
    </script>

    {{-- configuración del tiempo  en que aparece la alerta --}}
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".alertarequest").fadeOut(1500);
            }, 3000);
        });
    </script>

    {{-- Input que solo acepte letras y espacios --}}
    <script type="text/javascript">
        $("input.nombre").bind('keypress', function(event) {
            var regex = new RegExp("^[a-zA-ZáéíóúÁÉÍÓÚÑñ ]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
    </script>


@endsection
