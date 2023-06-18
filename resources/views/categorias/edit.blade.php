<div class="form-group row">
    <label class="col-md-3 form-control-label text-right is-required">Categoría</label>
    <div class="col-md-9">
        <input type="text" name="name" id="name" class="form-control" placeholder="Nombre de categoría"
            autocomplete="off" value= {{'categoria_id'}}>
        @if ($errors->first('name'))
            <div class="invalid-feedback">
                <i>{{ $errors->first('name') }}</i>
            </div>
        @endif
    </div>
</div>

<br>
<div class="modal-footer">
    <button type="submit" class="btn btn-mint"><i class="fa fa-save fa-1x"></i> Guardar</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
</div>


