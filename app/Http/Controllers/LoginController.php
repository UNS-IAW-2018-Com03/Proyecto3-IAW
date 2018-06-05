<?php

namespace MisReclamos\Http\Controllers;

use Illuminate\Http\Request;
use MisReclamos\UserAdmin;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Session;

class LoginController extends Controller
{
    public function index(){
      if(Session::has('id') && Session::get('id')){
        return redirect()->route('panelReclamo');
      }
      else{
        return view('login.pleaseLogin');
      }
    }

    public function login(Request $request){
      $name = $request->input('name');
      try{
        $userAdmin =  UserAdmin::where('name',$name)->firstOrFail();
      }
      catch(ModelNotFoundException $ex){
        $error = 'Ese usuario no existe';
        return view('login.errorLogin',compact('error'));
      }
      if (password_verify($request->input('password'), $userAdmin->password)) {
          session(['id' => True]);
          return redirect()->route('panelReclamo');
      } else {
        $error = 'La contraseña es inválida';
        return view('login.errorLogin',compact('error'));
      }
    }

    public function logout(){
      session(['id' => False]);
      return redirect()->route('login');
    }

    public function register(Request $request){
      $userAdmin = new UserAdmin();
      $userAdmin->name = $request->input('name');
      $userAdmin->password = password_hash($request->input('password'), PASSWORD_DEFAULT);
      $userAdmin->save();
      return 'saved';
    }
}
