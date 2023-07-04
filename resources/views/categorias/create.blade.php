@extends('layouts.main')

@section('title', 'Categorías')

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
                <h1 class="page-header text-overflow text-center brand-text">Agregar Categoría</h1>
            </div>
        </div><br>&nbsp;

        <div id="page-content">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="panel">
                        <section id="content" class="create">
                            <form class="form-horizontal" autocomplete="off" id="form">
                                @csrf
                                @method('POST')
                                <div class="form-group row">
                                    <br> <label
                                        class="col-md-12 form-control-label text-right invalid-feedback text-semibold">Los
                                        campos
                                        marcados con
                                        <strong class="text-bold">*</strong> son obligatorios &nbsp;</label>
                                </div>
                                <br>&nbsp;

                                <div class="form-group row">
                                    <label
                                        class="col-md-3 form-control-label text-right is-required text-bold text-semibold">Categoría</label>
                                    <div class="col-md-7">
                                        <input type="text" name="nombre" id="nombre" class="form-control"
                                            placeholder="Nombre de categoría" autocomplete="off">
                                        <span class="invalid-feedback errors-nombre"></span>
                                    </div>
                                </div><br>&nbsp;

                                <div class="form-group row">
                                    <label
                                        class="col-md-3 form-control-label text-right text-bold text-semibold">Imagen</label>
                                    <div class="col-md-7">
                                        <img src="{{ asset('imagenes/categorias/add_image.jpg') }}" id="img"
                                            class="mg-lg mar-ver img-cent upload-box"
                                            alt="Seleccione una imagen para está categoría.">

                                        <input type="file" placeholder="Coloque la imagen" name="imagen" id="imagen"
                                            class="upload-box" accept="image/png,image/jpeg,image/jpg,image/jfif">
                                        <span class="invalid-feedback errors-imagen"></span>
                                    </div>
                                </div><br>&nbsp;
                                {{-- <div class="alert alert-success" style="display: none;"></div> --}}
                                <div class="panel-footer clearfix">

                                    <div class="col-lg-5">
                                        <a href="{{ route('categorias.index') }}"
                                            class="text-right fs-6 text-secundario add-tooltip" data-toggle="tooltip"
                                            data-container="body" data-placement="top" data-original-title=""><img
                                                src="{{ asset('assets/img/regresar.jpg') }}" width="34"
                                                height="34"></a>
                                    </div>

                                    <div class="col-lg-4">
                                        <button type="text" id="btn-enviar" class="btn btn-mint"><i
                                                class="fa fa-save fa-1x"></i>
                                            Guardar</button>
                                    </div>

                                </div>

                            </form>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')

    {{-- --------------Previsualizar imagen en el formulario de create --------------- --}}
    <script type="text/javascript">
        const defaultFile = 'imagenes/categorias/add_image.jpg';

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

    {{-- --------------Validar Formulario create --------------- --}}
    <script type="text/javascript">
        const btn = document.querySelector("#btn-enviar");
        const form = document.querySelector("#form");
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            const datos = new FormData(form);
            fetch("{{ route('categorias.store') }}", {
                    method: 'post',
                    body: datos
                })
                .then(response => response.json())
                .then(result => {
                    console.log(result)
                    if (result.alerta == "danger") {
                        let nombre = document.querySelector(".errors-nombre");
                        nombre.textContent = result.nombre[0];
                    }
                    if (result.alerta == "success") {
                        window.location.href = "{{ route('categorias.index')}}";
                        const success = document.querySelector(".alert");
                        success.textContent = "El formulario se valido correctamente";
                        success.style.display = "block";

                    }
                })
        });
    </script>

@endsection
