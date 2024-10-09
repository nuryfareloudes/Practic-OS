<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function index(){
        $empresas = Empresas::all();
        return view('Empresas.Lista', compact('empresas'));
    }

    public function nuevo(){
        return view('Empresas.Nuevo');
    }

    public function guardar_nuevo(Request $request){
        Empresas::create($request->all());
        return redirect('empresas')->with('success','Empresa Creada Satisfactoriamente');
    }

    public function editar($id){
        $empresa = Empresas::findOrFail($id);
        return view('Empresas.Editar', compact('empresa'));
    }

    public function guardar_editar(Request $request, $id){
        $empresa = Empresas::findOrFail($id);
        $empresa->update($request->all());
        return redirect('empresas')->with('success','Empresa Actualizada Satisfactoriamente');
    }

    public function borrar($id){
        $empresa = Empresas::findOrFail($id);
        $empresa->delete();
        return redirect('empresas')->with('success','Empresa Borrada Satisfactoriamente');
    }

    public function ver($id){
        $empresa = Empresas::findOrFail($id);
        return view('Empresas.Ver',compact('empresa'));
    }
}
