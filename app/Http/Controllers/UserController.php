<?php

namespace App\Http\Controllers;

use App\Models\User;
//use App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{


  public function login(Request $request)
  {

//return dd($request->all());

$data= request()->validate([

  'name'=>'required',
  'password'=>'required'

],

[
  'name.required'=>'ingrese Usuario',
    'password.required'=>'ingrese Contraseña',

]);

if (Auth::attempt($data)) {
$con='OK';
}

$name= $request->get('name');
$query=User::where('name','=',$name)->get();

if ($query->count()!=0) {


  $hashp=$query[0]->password;
  $password=$request->get('password');
  if (password_verify($password,$hashp))
  {

    return view('bienvenido');
  }
  else {
    return back()->withErrors(['password'=>'contraseña no valida'])->withInput([request('password')]);
  }

}

else {
  return back()->withErrors(['name'=>'usuario no valido'])->withInput([request('usuario')]);
}

  }


}
