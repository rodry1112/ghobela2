<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavigationController extends Controller
{
    public function index(){

        $productos = Producto::with(['colors', 'tallas', 'marcas', 'categorias'])->paginate(10);

        return view("Navigation.home", compact('productos'));
    }
    public function catalogo(){
        return view("Navigation.catalogo");
    }
    public function nosotros(){
        return view("Navigation.nosotros");
    }
}
