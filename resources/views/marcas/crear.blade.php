@extends("themes.adminlte.layout")


@section('titulo')
  MARCAS DE ARTICULOS
@endsection

@section('contenido')
<div class="row" >
  <div class="col-md-6" >
    @include('includes.form-error')
    <div class="box box-info" >
      <div class="box-header with-border">
        <h3 class="box-title">Nueva Marca</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start  form-general es una clase para poder validar luego del lado del cliente-->
      <form action={{route('guardar_marca')}} class="form-horizontal" id="form-general" method="POST">
        @csrf
        <div class="box-body">

          @include('marcas.form')

        </div>
          <!-- /.box-body -->
        <div class="box-footer">
          <button type="reset" class="btn btn-default" >Cancelar</button>
          <button type="submit" class="btn btn-success">Grabar</button>

        </div>
          <!-- /.box-footer -->
      </form>
    </div>
  </div>
</div>

@endsection
