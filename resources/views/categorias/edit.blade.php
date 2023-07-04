<!--Start del modal actualizar Categoria-->
<div class="modal fade" id="editcategoria{{ $categoria->categoria_id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-primary" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="mmodal-title text-bold text-light text-center">Actualizar Categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times fa-1x"></i></span>
                </button>
            </div>

            <div class="modal-body">

                <form action="{{ route('categorias.update', $categoria->categoria_id) }}" enctype="multipart/form-data"
                    class="form" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <div class="col-md-6">
                        </div>
                        <label class="col-md-6 form-control-label text-left invalid-feedback">Los campos
                            marcados con
                            <strong class="text-bold">*</strong> son obligatorios</label>
                    </div><br>

                    <input type="hidden" name="categoria_id" class="form-control"
                        value="{{ $categoria->categoria_id }}" autocomplete="off">

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label text-left is-required">Categoría</label>
                        <div class="col-md-7">
                            <input type="text" name="nombre" class="form-control"
                                placeholder="Nombre de categoría" autocomplete="off" value="{{$categoria->nombre}}">
                            @if ($errors->first('nombre'))
                                <div class="invalid-feedback">
                                    <i>{{ $errors->first('nombre') }}</i>
                                </div>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-3 form-control-label text-left">Imagen</label>
                        <div class="col-md-7"><br>

                            {{-- <img src="{{ asset('imagenes/categorias/' . $categoria->imagen) }}"> --}}

                            {{-- <img src="{{ asset('imagenes/categorias/' . $categoria->imagen) }}"
                                class="mg-lg img-circle mar-ver img-cent" alt="Imagen de la categoría"> --}}

                            <input type="file" placeholder="Coloque la imagen" name="imagen" id="imagen" class="upload-box"
                                accept="image/png,image/jpeg,image/jpg,image/jfif"><br>

                            @if ($errors->first('imagen'))
                                <i class="text-danger">{{ $errors->first('imagen') }}
                                    <label> La imagén no debe exceder los 2 Mb</label></i>
                            @endif

                        </div>

                    </div>


                    <br>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-mint"><i class="fa fa-save fa-1x"></i>
                            Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-ban fa-1x">
                            </i>
                            Cancelar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
