@extends("themes.adminlte.layout")


@section('titulo')
  LISTADO DE CATEGORIAS
@endsection

@section('contenido')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Listado de Categorias de Articulos</h3>

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
            <a href="{{ route('nueva_marca') }}" class="btn bg-olive btn-flat margin">Agregar Categoria</a>
          </div>
        </div>
        <!-- /.box-header -->
        @if ($categorias->isEmpty())
                <div>No existen categorias de articulos cargadas</div>
        @else
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th style="width: 15px">ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
              </tr>
              @foreach($categorias as $categoria)
                <tr>
                  <td>{!! $categoria->id !!}</td>
                  <td>{!! $categoria->nombre !!}</td>
                  <td>{!! $categoria->descripcion !!}</td>
                  <td>


                      <a href="{{ route('editar_categoria', $categoria->id) }}" class="btn btn-warning">Modificar</a>
                      <a href="{{ route('eliminar_categoria', $categoria->id) }}" class="btn btn-danger">Eliminar</a>
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
@endsection

