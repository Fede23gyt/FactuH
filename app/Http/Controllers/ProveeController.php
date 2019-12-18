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

    
    /* EVENTOS PARA EL ALTA DE UN PROVEEDOR */
    public function nuevo()
    {
        return view('proveedores.crear');
    }

    public function grabar(Request $request)
    {
        Proveedores::create($request->all());
        
        return redirect()->route('provee');
    }


    public function ver($idp)
    {
        dd($idp);
        //$provee = Proveedores::where('id',$idp);
        //$provee = Proveedores::where('id',$id)->first();
        //sdd($provee);
        //return view('proveedores.index')->with('proveedor',$proveedor);*/
    }

    public function editar($id)
    {
        dd($id);
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
