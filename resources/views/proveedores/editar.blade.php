@extends("themes.adminlte.layout")


@section('titulo')
  PROVEEDORES
@endsection

@section('contenido')
<div class="row" >
  <div class="col-md-6">
    @include('includes.form-error')
    <div class="box box-info" >
      <div class="box-header with-border">
        <h3 class="box-title">Editar Proveedor</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start  form-general es una clase para poder validar luego del lado del cliente-->
      <form action={{route('editar_provee',$Proveedor->$id)}} class="form-horizontal" id="form-general" method="PUT">
        @csrf
        <div class="box-body">

          <div class="form-group">
            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-8">
              <input type="text" name="nombre" class="form-control" id="nombre" value="{{$proveedor->nombre}}" required>
            </div>
          </div>
          <div class="form-group">
            <label for="domicilio" class="col-sm-2 control-label">Domicilio</label>
            <div class="col-sm-8">
              <input type="text" name="domicilio" class="form-control" id="domicilio" value="{{$proveedor->nombre}}" required>
            </div>
            </div>
            <div class="form-group">
                <label for="cuit" class="col-sm-2 control-label">CUIT</label>
                <div class="col-sm-4">
                  <input type="text" name="cuit" class="form-control" id="descrcuitipcion" value="{{old('cuit')}}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="telefono" class="col-sm-2 control-label">Telefono</label>
                <div class="col-sm-4">
                  <input type="text" name="telefono" class="form-control" id="telefono" value="{{old('telefono')}}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="mail" class="col-sm-2 control-label">Mail</label>
                <div class="col-sm-5">
                  <input type="mail" name="mail" class="form-control" id="mail" value="{{old('mail')}}" required>
                </div>
            </div>

            </div>
              <!-- /.box-body -->
            <!--<div class="box-footer">
              <button type="reset" class="btn btn-default" >Cancelar</button>
              <button type="submit" class="btn btn-success">Grabar</button>

            </div>
            -->
              <!-- /.box-footer -->
      </form>
    </div>
  </div>
</div>

@endsection