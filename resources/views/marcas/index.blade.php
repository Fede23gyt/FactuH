@extends("themes.adminlte.layout")


@section('titulo')
  LISTADO DE MARCAS
@endsection

@section('contenido')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Listado de Marcas de Articulos</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm hidden-xs" style="width: 250px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
          <div>
            <br>
            <a href="{{ route('nueva_marca') }}" class="btn bg-olive btn-flat margin">Agregar Marca</a>
          </div>
        </div>
        <!-- /.box-header -->
        @if ($marcas->isEmpty())
                <div>No existen marcas cargadas</div>
        @else
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th style="width: 15px">ID</th>
                <th>Descripcion</th>
                <th>Acciones</th>
              </tr>
              @foreach($marcas as $marca)
                <tr>
                  <td>{!! $marca->id !!}</td>
                  <td>{!! $marca->descripcion !!}</td>
                  <td>


                      <a href="{{ route('editar_marca', $marca->id) }}" class="btn btn-warning">Modificar</a>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                            Ver</button>
                      <a href="{{ route('eliminar_marca', $marca->id) }}" class="btn btn-danger">Eliminar</a>
                  </td>

                </tr>
              @endforeach
            </table>
          </div>
        @endif
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>

  <div class="modal modal-info fade" id="modal-info">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Datos Marca</h4>
        </div>
        <div class="modal-body">
          <form action={{route('ver_marca', $marca->id)}} class="form-horizontal" id="form-general" method="GET">
            <div class="form-group">
              <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
              <div class="col-sm-8">
                <input type="text" name="descripcion" class="form-control" id="descripcion" 
                      value="{{$marca->descripcion}}" disabled>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endsection

