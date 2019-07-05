<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;
use App\Productos;

class VentaController extends Controller
{
    public function index()
    {
        $venta = Venta::all()->sortByDesc("fecha");
       // $venta->has_producto;
       
        return view('Ventas.ventas',)
        ->with('ventas',$venta);
    }

    public function detalle($id)
    {
        $venta = Venta::find($id);
        if($venta != null)
        {
            $detalle = $venta->has_producto;
        }
        else
        {
            $detalle = null;
        }
        return view('Ventas.detalle',)
        ->with('venta',$venta)
        ->with('detalle',$detalle);
    }

    public function GenerarVenta(Request $request)
    {
        date_default_timezone_set('America/Santiago');
        $j = json_decode($request->getContent());
        
        $total = 0;
        $item = 0;
        $date = date('Y-m-d H:i:s');
        foreach ($j as $u) {
           $total = $total + $u->precio;
           $item = $item + 1;
        }
        
        Venta::create([
            'fecha' => $date,
            'precio_total' => $total,
            'item_total'=> $item,
        ]);

        $venta = venta::where('fecha', $date)->get()->first();
        
        

        foreach ($j as $u) {
            $venta->has_producto()->attach($u->id);
            $producto = Productos::find($u->id);
            $producto->decrement('stock');
         }
        
        
        


        
        return "Exito";

    }
}
