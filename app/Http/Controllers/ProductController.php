<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProducto;
use App\Models\Categoria;
use App\Models\Color;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Talla;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Store as HttpCacheStore;

class ProductController extends Controller
{
    public function index(Request $request){

        echo $request->buscarProducto;
        $condicionProducto = $request->condicionProducto;
        $buscarProducto = trim($request->buscarProducto);
        
        if($condicionProducto == null){
            $condicionProducto = 'nombre';
        }

        $productos = Producto::where($condicionProducto, 'LIKE', '%' . $buscarProducto . '%')->paginate(10);

        $data = [
            'productos' => $productos,
            'buscarProducto' => $buscarProducto,
            'condicionProducto' => $condicionProducto
        ];
        
        return view("administrator.product.index", $data);
    }

    public function create(){

        return view("administrator.product.createProduct");
    }

    public function modify(Producto $producto){
        
        return view('administrator.product.modifyProduct', compact('producto'));
    }

    public function show(Producto $producto){
        

        $colors = $producto->colors()->allRelatedIds();
        $tallas = $producto->tallas()->allRelatedIds();
        $marcas = $producto->marcas()->allRelatedIds();
        $categorias = $producto->categorias()->allRelatedIds();

        $colors = $producto->colors()->find($colors);
        $tallas = $producto->tallas()->find($tallas);
        $marcas = $producto->marcas()->find($marcas);
        $categorias = $producto->categorias()->find($categorias);

        return view('administrator.product.showProduct', compact('producto', 'colors', 'tallas', 'marcas', 'categorias'));
    }


    /*
    * Alamcenar producto
    */
    public function store(StoreProducto $request){
        //$imagen = $request->file('imagen')->store('/public/imagenes');

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destination = 'admin_images/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destination, $filename);
        }
        
        
        Producto::create([
            'nombre' => $request->nombre,
            'genero' => $request->genero,
            'visible' => $request->visible,
            'temporada' => $request->temporada,
            'imagen' => $destination . $filename,
            'activo' => $request->activo,
            'destacado' => 0,
            'novedad' => 0,
            'numeroSerie' => $request->numeroSerie
        ]);

        $producto = Producto::latest()->first();

        /* 
        * Para almacenar el color, talla, categoria y marca
        */
        ProductController::updateMarcaCategoria($producto, $request);
        ProductController::updateColorTalla($producto, $request);

        return redirect()->route('product.index');
    }


    /*
    * Actualizar producto
    * 
    */
    public function update(Producto $producto, StoreProducto $request){
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destination = 'admin_images/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destination, $filename);
        }
        
        //$producto->update($request->all());

        $producto->update([
            'nombre' => $request->nombre,
            'genero' => $request->genero,
            'visible' => $request->visible,
            'temporada' => $request->temporada,
            'imagen' => $destination . $filename,
            'activo' => $request->activo,
            'numeroSerie' => $request->numeroSerie
        ]);

        /* 
        * Para almacenar el color, talla, categoria y marca
        */
        ProductController::updateMarcaCategoria($producto, $request);
        ProductController::updateColorTalla($producto, $request);

        return redirect()->route('product.index');
    }

    public function destroy(Producto $producto){

        $producto->delete();

        return redirect()->route('product.index');
    }


    /*
     * Crear Marca y Categoria
     */
    private static function updateMarcaCategoria(Producto $producto, StoreProducto $request){
        
        $producto->categorias()->detach();
        $producto->marcas()->detach();

        $categoria = Categoria::where('tipo', $request->categoria)->first();

        $nombreMarca = strtolower($request->marca);
        $marca = Marca::where('marca', $nombreMarca)->first();

        if($categoria == null){
            Categoria::create([
                'tipo' => $request->categoria,
                'descripcion' => "nada"
            ]);

            $categoria = Categoria::latest()->first();
        }

        if($marca == null){
            Marca::create([
                'marca' => $nombreMarca
            ]);

            $marca = Marca::latest()->first();
        }

        $producto->categorias()->attach($categoria->id);
        $producto->marcas()->attach($marca->id);
    }


    /*
     * Crear Color y Talla
     */
    private static function updateColorTalla (Producto $producto, StoreProducto $request){

        $producto->colors()->detach();
        $producto->tallas()->detach();

        $colors = array_unique($request->color);
        $tallas = array_unique($request->talla);

        $canColor = count($colors);
        $canTalla = count($tallas);
        
        $conteoColor = 0;
        $conteoTalla = 0;
    
        while($canColor > 0){
            if(isset($colors[$conteoColor])){
                $nombreColor = strtolower($colors[$conteoColor]);
                $color = Color::where('color', $nombreColor)->first();
                if($color == null){
                    Color::create([
                        'color' => $nombreColor
                    ]);
    
                    $color = Color::latest()->first();
                }
    
                $producto->colors()->attach($color->id);
                $canColor--;
            }
            $conteoColor++;
        }
    
        while($canTalla > 0){
            if(isset($tallas[$conteoTalla])){
                $nombreTalla = strtolower($tallas[$conteoTalla]);
                $talla = Talla::where('talla', $nombreTalla)->first();
                if($talla == null){
                    Talla::create([
                        'talla' => $nombreTalla
                    ]);
    
                    $talla = Talla::latest()->first();
                }
    
                $producto->tallas()->attach($talla->id);
                $canTalla--;
            }
            $conteoTalla++;
        }
    }

}


