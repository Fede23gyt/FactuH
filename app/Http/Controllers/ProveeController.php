<?php

namespace App\Http\Controllers;
use App\Proveedores;


use Illuminate\Http\Request;

class ProveeController extends Controller
{
     public function index()
    {
        $proveedores = Proveedores::all();
        return view('proveedores.index')->with('proveedores',$proveedores);
    }

    public function nuevo()
    {
        return view('proveedores.crear');
    }

    public function grabar(Request $request)
    {
        Proveedores::create($request->all());
        
        return redirect()->route('provee');
    }

    public function ver($id)
    {
        $proveedor = Proveedores::find($id);
        
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
}
