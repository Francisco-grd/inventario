<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Productos;

class CartController extends Controller
{
    public function index()
    {
        date_default_timezone_set('America/Santiago');
        return view('CarrodeCompra.carro',);
    }

    public function busqueda(Request $request)
     {
         $cod = Productos::where('sku', $request->codigo)->first()->toJson();

        return $cod;
         
     }
    
     

}
