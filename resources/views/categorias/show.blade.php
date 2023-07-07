 <!--Start del modal Consultar Categoria-->
 <div class="modal fade" id="showcategoria{{ $categoria->categoria_id }}" tabindex="-1" role="dialog"
     aria-labelledby="ShowCategoriaLabel" style="display: none;" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-primary" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title text-bold text-light text-center">Consultar Categoría</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true"><i class="fa fa-times fa-1x text-bold text-light"></i></span>
                 </button>
             </div>

             <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-3 text-left">Categoría</label>
                    <div class="col-md-7">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre de categoría"
                            autocomplete="off" readonly value="{{ $categoria->nombre }}">
                    </div>
                </div><br>
                
                <label class="col-md-3 form-control-label text-left">Imagen</label>
                <div class="form-group row">
                    <div class="col-md-7"><br>
                        <img src="{{ asset('imagenes/categorias/' . $categoria->imagen) }}"
                        class="mg-lg mar-ver img-show" alt="Imagen de la categoría">
                    </div>
                </div>
                
                <br>&nbsp;
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-ban fa-1x"> </i>
                        Cerrar</button>
                </div>
                
             </div>

         </div>
     </div>
 </div>
