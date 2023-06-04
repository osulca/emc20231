<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion;
use Auth;

class DireccionController extends Controller
{
    public function registrar(){
        return view("registroDireccion");
    }

    public function guardar(Request $request){
        $request->validate([
            "provincia" => "required",
            "departamento" => "required",
            "distrito" => "required",
            "direccion" => "required",
        ]);

        $direccion = new Direccion();
        $direccion->provincia = $request->input("provincia");
        $direccion->departamento = $request->input("departamento");
        $direccion->distrito = $request->input("distrito");
        $direccion->direccion = $request->input("direccion");
        $direccion->user_id = Auth::user()->id;
        $direccion->save();
        return "Direccion Guardada";
    }

    public function buscarDireccion($user_id){
        return Direccion::where('user_id', $user_id)->first()->direccion;
    }
}
