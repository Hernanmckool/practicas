
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Vista de Categorias</h3><br><a href="{!!URL::to('/categorias/create')!!}" class="btn btn-primary primary btn-xs" role="button">Crear Categoria</a>

                  
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;" id="busqueda">
                      <input type="text" id="q" name="q" name="table_search" class="form-control input-sm pull-right" placeholder="Buscar">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover" id="table">
                    <thead>
                      <th>Categoria</th>
                      <th>Seccion</th>
                      <th><div align="center"><span class="glyphicon glyphicon-cog"></span><span class="glyphicon glyphicon-wrench"></span> Acciones</div></th>
                      <th>Estado</th>
                    </thead>
                    <tbody id="table_cat">
                    </tbody>
                  </table>
                   <div align="center">{!!$categ->render()!!}</div>
                  <input type="hidden" id="tipo" value="categorias">
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
