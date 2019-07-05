<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use Session;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Productos::all();
        
        return view('Productos.productos',)
        ->with('productos',$productos);
    }

    public function detalle()
    {
        return "detaller";
    }

    public function descripcion($id)
    {
        $item = Productos::find($id);

        return view('Productos.descripcion',)
        ->with('item', $item);
    }

    public function add()
    {
        return  view('Productos.addproducto');
    }

    public function create()
    {
        $data = request()->validate([
            'nombre'=> 'required',
            'precio'=> 'required',
            'stock'=> 'required',
            'sku'=> 'required|unique:productos,sku',
        ],[
            'nombre.required'=> 'El campo del nombre es obligatorio',
            'precio'=> 'El campo del precio es obligatorio',
            'stock'=> 'El campo del stock es obligatorio',
            'sku.unique'=> 'El SKU ya esta registrado',
        ]);

        Productos::create([
            'nombre' => $data['nombre'],
            'sku' => $data['sku'],
            'precio'=> $data['precio'],
            'stock'=> $data['stock'],
        ]);

        return redirect()->route('Productos.addproducto')
        ->with('exito','Producto Creado exitosamente');
    }

    public function addsku()
    {
        $item = Productos::where('sku', 2)->get();
        Session::put('cart',$item);
        
        
        return  view('Ventas.ventas');
    }

    public function update()
    {
        return  view('Productos.actualizarproducto');
    }
    
    public function busqueda()
    {
        $data = request();
        $item = Productos::where('sku', $data['sku'])->get()->first();

        return view('Productos.actualizarproducto',)
        ->with('item',$item);
    }

    public function actualizar()
    {
        $data = request();

        $producto = Productos::find($data['txtid']);
        $producto->stock = $data['txtstock'];
        $producto->precio = $data['txtprecio'];
        $producto->save();
        return redirect('/productos');
    }

}
