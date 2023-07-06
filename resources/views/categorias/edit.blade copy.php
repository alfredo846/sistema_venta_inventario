  <!--Start del modal Actualizar Manual Categoria-->
  <div class="modal fade" id="actualizarcategoria{{ $categoria->categoria_id }}" tabindex="-1" role="dialog"
      aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-primary" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title text-bold text-light text-center">Actualizar Categoría</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="fa fa-times fa-1x text-bold text-light"></i></span>
                  </button>
              </div>
              <div class="modal-body">
                  <form class="form-horizontal" autocomplete="off" id="formactualizar">
                      @csrf
                      <div class="form-group row">
                          <label class="col-md-12 form-control-label text-right invalid-feedback text-semibold">Los
                              campos
                              marcados con
                              <strong class="text-bold">*</strong> son obligatorios &nbsp;</label>
                      </div><br>

                      <input type="hidden" name="categoria_id" class="form-control"
                          value="{{ $categoria->categoria_id }}" autocomplete="off">

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label text-left is-required">Categoría</label>
                          <div class="col-md-7">
                              <input type="text" name="nombre" id="nombre" class="form-control" mazlength="30"
                                  placeholder="Nombre de categoría" autocomplete="off" value="{{ $categoria->nombre }}">
                              <span class="validacionedit invalid-feedback errors-name"></span>
                          </div>
                      </div><br>


                      <div class="form-group row">
                          <label class="col-md-3 form-control-label text-left">Imagen</label>
                          <span class="validacion invalid-feedback errors-foto"></span>
                          <div class="col-md-7">
                              <input type="file" placeholder="Coloque la imagen" name="imagen" id="imagen"
                                  class="upload-box" accept="image/png,image/jpeg,image/jpg,image/jfif">
                          </div>
                      </div><br>


                      <div class="modal-footer">
                          <button type="text" id="btn-actualiza" class="btn btn-mint text-center"><i
                                  class="fa fa-save fa-1x"></i>
                              Actualizar</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-ban fa-1x">
                              </i>
                              Cancelar</button>
                      </div>

                  </form>
              </div>
          </div>
      </div>
  </div>
