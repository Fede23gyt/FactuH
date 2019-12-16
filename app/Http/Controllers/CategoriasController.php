<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionCategorias;

Use App\Categorias;

class CategoriasController extends Controller
{
    public function index()
    {
      $categorias = Categorias::all();
      return view('categorias.index')->with('categorias',$categorias);
    }

    public function nuevo()
    {
        return view('categorias.crear');
    }

    public function grabar(ValidacionCategorias $request){

      /* hago validaciones en funcion al Request */
      Categorias::create($request->all());

      /*_redirecciono a la ruta destino luego de grabar */
      redirect ('categorias.crear')->with('mensaje','Categoria creada con exito');
    }

     public function editar($id)
    {
        //
    }

    public function actualizar(Request $request, $id)
    {
        //
    }

    public function eliminar($id)
    {
        //
    }

    public function ver($id)
    {
        $categoria = Categorias::find($id);
        
    }
}
