<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
	protected $table ="proveedores";
  	protected $fillable = ['nombre','domicilio','telefono', 'mail', 'cuit'];
  	protected $guarded = ['id'];
}
