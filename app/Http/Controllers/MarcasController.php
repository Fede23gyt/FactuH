
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marcas;

class MarcasController extends Controller
{
    public function index()
    {
        $marcas = Marcas::all();
        return view('marcas.index')->with('marcas',$marcas);
    }

    public function nuevo()
    {
        return view('marcas.crear');
    }

    public function grabar(Request $request)
    {
        Marcas::create($request->all());
        
        return redirect()->route('marcas');
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
        $marca = Marcas::find($id);
        
    }
}
