<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categorium;

class ProductoPublicaController extends Controller
{
    public function index()
    {
        $productosPublic = Producto::paginate();

        return view('productoPublic.index', compact('productosPublic'))
            ->with('i', (request()->input('page', 1) - 1) * $productosPublic->perPage());
    }
   //Se desean mostrar los productos que tengan un mismo id_categoria
    public function show($id)
    {
        $productosPublic = Producto::where('id_categoria', $id)->paginate();

        return view('productoPublic.show', compact('productosPublic'))
            ->with('i', (request()->input('page', 1) - 1) * $productosPublic->perPage());
        
    }
}
