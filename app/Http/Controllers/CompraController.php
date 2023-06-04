<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Http\Controllers\DireccionController;
use Auth;

class CompraController extends Controller
{
    public function registrar(){
        return view("registroCompra");
    }

    public function guardar(Request $request){
        $dc = new DireccionController();
        $direccion = $dc->buscarDireccion(Auth::user()->id);

        $compra = new Compra();
        $compra->producto = $request->input("producto");
        $compra->peso = $request->input("peso");
        $compra->precio = $request->input("precio");
        $compra->direccion = $direccion;
        $compra->nro_seguimiento = $this->generarNroSeguimiento();
        $compra->user_id = Auth::user()->id;
        $compra->save();
        return "Compra Guardada";
    }

    public function generarNroSeguimiento(){
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($permitted_chars), 0, 10);       
    }
}
