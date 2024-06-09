<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProducto;
use App\Http\Requests\StoreUsuario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    public function index(Request $request){

        echo $request->buscarUsuario;
        $condicionUsuario = $request->condicionUsuario;
        $buscarUsuario = trim($request->buscarUsuario);
        
        if($condicionUsuario == null){
            $condicionUsuario = 'name';
        }

        $usuarios = User::where($condicionUsuario, 'LIKE', '%' . $buscarUsuario . '%')->paginate(10);

        $data = [
            'usuarios'  => $usuarios, 
            'condicionUsuario' => $buscarUsuario,
            'buscarUsuario' => $condicionUsuario
        ];
        
        $usuarios = User::paginate(10);
        return view('administrator.user.index', $data);
    }

    public function create(){
        
        return view('administrator.user.createUser');
    }

    public function modify(User $usuario){

        return view('administrator.user.modifyUser', compact('usuario'));
    }

    public function show(User $usuario){

        return view('administrator.user.showUser', compact('usuario'));
    }

    public function store(StoreUsuario $request){

        $password = Hash::make($request->password);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password
        ]);
        return redirect()->route('user.index');
    }

    public function update(StoreUsuario $request, User $usuario){

        $usuario->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect()->route('user.index');
    }

    public function destroy(User $usuario){
        
        $usuario->delete();
        return redirect()->route('user.index');
    }

}
