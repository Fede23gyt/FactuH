@extends("themes.adminlte.layout")


@section('titulo')
  LISTADO DE PROVEEDORES
@endsection

@section('contenido')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Proveedores</h3>

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
            <a href="{{ route('nuevo_provee') }}" class="btn bg-olive btn-flat margin">Agregar Proveedor</a>
          </div>
        </div>
        <!-- /.box-header -->
        @if ($proveedores->isEmpty())
                <div>No existen proveedores registrados en el sistema</div>
        @else
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th style="width: 15px">ID</th>
                <th>Nombre</th>
                <th>CUIT</th>
                <th>Domicilio</th>
                <th>Telefono</th>
                <th>Acciones</th>
              </tr>
              @foreach($proveedores as $proveedor)
                <tr>
                  <td>{!! $proveedor->id !!}</td>
                  <td>{!! $proveedor->nombre !!}</td>
                  <td>{!! $proveedor->cuit !!}</td>
                  <td>{!! $proveedor->domicilio !!}</td>
                  <td>{!! $proveedor->telefono !!}</td>
                  <td>
                      <a href="{{ route('editar_provee', $proveedor->id) }}" class="btn btn-warning">Modificar</a>
                      <a href="{{ route('eliminar_provee', $proveedor->id) }}" class="btn btn-danger">Eliminar</a>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                            Ver</button>
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
          <h4 class="modal-title">Datos Proveedor</h4>
        </div>
        <div class="modal-body">
          <form action={{route('ver_provee', $proveedor->id)}} class="form-horizontal" id="form-general" method="GET">
          <div class="form-group">
            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-8">
              <input type="text" name="nombre" class="form-control" id="nombre" value="{{$proveedor->nombre}}" disabled>
            </div><br>
          </div>
          <div class="form-group">
            <label for="domicilio" class="col-sm-2 control-label">Domicilio</label>
            <div class="col-sm-8">
              <input type="text" name="domicilio" class="form-control" id="domicilio" value="{{$proveedor->domicilio}}" disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="cuit" class="col-sm-2 control-label">CUIT</label>
            <div class="col-sm-4">
              <input type="text" name="cuit" class="form-control" id="cuit_f" value="{{$proveedor->cuit}}" disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="telefono" class="col-sm-2 control-label">Telefono</label>
            <div class="col-sm-4">
              <input type="text" name="telefono" class="form-control" id="telefono" value="{{$proveedor->telefono}}" disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="mail" class="col-sm-2 control-label">Mail</label>
            <div class="col-sm-5">
              <input type="mail" name="mail" class="form-control" id="mail" value="{{$proveedor->mail}}" disabled>
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

