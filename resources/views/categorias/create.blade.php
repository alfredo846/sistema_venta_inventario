<div class="form-group row">
    <label class="col-md-12 form-control-label text-right invalid-feedback text-semibold">Los
        campos
        marcados con
        <strong class="text-bold">*</strong> son obligatorios &nbsp;</label>
</div>
<br>

<div class="form-group row">
    <label class="col-md-3 form-control-label text-right is-required text-bold text-semibold">Categoría</label>
    <div class="col-md-7">
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de categoría"
            autocomplete="off">
        <span class="validacion invalid-feedback errors-nombre"></span>
    </div>
</div><br>

<div class="form-group row">
    <label class="col-md-3 form-control-label text-right text-bold text-semibold">Imagen</label>
    <span class="validacion invalid-feedback errors-imagen"></span>
    <div class="col-md-7">
        <img src="{{ asset('imagenes/categorias/add_image.jpg') }}" id="img"
            class="mg-lg mar-ver img-cent upload-box" alt="Seleccione una imagen para está categoría.">
        <input type="file" placeholder="Coloque la imagen" name="imagen" id="imagen" class="upload-box"
            accept="image/png,image/jpeg,image/jpg,image/jfif">
    </div>
</div><br>
<div class="modal-footer clearfix">
    <button type="text" id="btn-enviar" class="btn btn-mint text-center"><i class="fa fa-save fa-1x"></i>
        Guardar</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-ban fa-1x"> </i>
        Cerrar</button>


</div>
