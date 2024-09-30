<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request) 
    {
    $pesquisar = $request->pesquisar ?? '';
    $findUsuario = User::where('name','LIKE',"%{$pesquisar}%")->get();
    
    return view('usuario.usuario', compact('findUsuario'));
    }
    public function cadastrarUsuario(UsuarioRequest $request)
    {
        if($request->method() == "POST") {
            $user = $request->all();
            $user ['password'] = bcrypt($request->password);
            User::create($user);
            return redirect()->route('usuario.index')->with('cadastrado','Cadastrado com sucesso');
        }
    return view('usuario.cadastrar');
    }
    
    public function edit(Request $request, $id)
    {
        if($request->method() == "PUT") {
            $user = $request->all();
            $user ['password'] = bcrypt($request->password);
          User::find($id)->update($user);
            return redirect()->route('usuario.index')->with('edita','Atualizado com sucesso');
        } 
        $usuario = User::find($id);
        if($usuario){
            return view('usuario.edita',compact('usuario')); 
        } else{
            return redirect()->route('usuario.index')->with('id','Usuario não encontrado!');
        } 
    
    }
    
    public function delete($id)
    {
        User::find($id) ->delete();
       
        return Redirect()->back()->with('delete', 'Usuario excluído com sucesso.');
    }
    } 

