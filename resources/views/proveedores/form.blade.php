<div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-8">
      <input type="text" name="nombre" class="form-control" id="nombre" value="{{old('nombre')}}" required>
    </div>
</div>
<div class="form-group">
    <label for="domicilio" class="col-sm-2 control-label">Domicilio</label>
    <div class="col-sm-8">
      <input type="text" name="domicilio" class="form-control" id="domicilio" value="{{old('domiclio')}}" required>
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