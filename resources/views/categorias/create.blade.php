<div class="form-group row">
    <div class="col-md-6">
    </div>
    <label class="col-md-6 form-control-label text-left invalid-feedback">Los campos marcados con 
        <strong class="text-bold">*</strong> son obligatorios</label>
</div><br>

<div class="form-group row">
    <label class="col-md-3 form-control-label text-left is-required">Categoría</label>
    <div class="col-md-7">
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de categoría"
            autocomplete="off">
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
        <input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
        <img src="" id="imagenmuestra" class="mg-lg img-circle mar-ver img-cent">
        <input type="file" placeholder="Coloque la imagen" id="imagen" class="upload-box" name="imagen"
            accept="image/png,image/jpeg,image/jpg,image/jfif"><br>

        @if ($errors->first('imagen'))
            <i class="text-danger">{{ $errors->first('imagen') }}
                <label> La imagén no debe exceder los 2 Mb</label></i>
        @endif

    </div>

</div>


<br>
<div class="modal-footer">
    <button type="submit" class="btn btn-mint"><i class="fa fa-save fa-1x"></i> Guardar</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-ban fa-1x"> </i>
        Cancelar</button>
</div>
