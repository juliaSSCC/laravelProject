<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class PagesController extends Controller
{
    public function index(){
      $usuarios = Usuario::all();
      //echo $usuarios;
      return view('index', compact('usuarios'));
    }

    public function entrar(Request $request){

       $usuarios = Usuario::where('login', '=', $request->get('login'))->first();
       if (!is_null($usuarios) && $usuarios->get('senha')[0]['senha']  == $request->get('senha'))
          return redirect('/index');
       else
          echo            "<script language='javascript' type='text/javascript'>
                alert('Senha Incorreta ou Usuário Inexistente');
                window.location.href = '/';
            </script>";;

    }

    public function store(Request $request){
      $usr = new Usuario([
           'login' => $request->get('login'),
           'senha' => $request->get('senha'),
       ]);
      echo $usr;
      $usr->save();
      return redirect('/index')->with('success', 'Cadastrado!');
    }

    public function edit($login){
      echo $login;
      //$usr = Usuario::findOrFail($id);

      //return view('cadastro', compact($usr));
    }

    public function update(Request $request, $login){

    }
    public function destroy($id){
    }
}
