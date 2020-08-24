<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\role_user;
use App\Http\Requests\UserRequest;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
   //
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index(Request $request)
    {
        $request->user()->authorizeRoles([ 'Administrador']);
      

        $users = User::orderBy('id','ASC')->paginate(5);
        return view('usuarios.Usuarios', compact('users'));
    
    }

    public function search(Request $request)
    {
        $search=$request->get('search');
        $users=User::orderBy('name','ASC')->where('name','like','%'.$search.'%')->paginate(5);
        return view('usuarios.Usuarios',['users' => $users]);
    }

    public function show($id, Request $request)
    {
        $request->user()->authorizeRoles([ 'Administrador']);

        if ($user = User::find($id)) {
            $roles=Role::get();
            $rolUser= role_user::get();
            return view('usuarios.VerDetalle', compact('user','roles','rolUser'));
        }
        return redirect('usuarios');
    }

    public function edit($id, Request $request)
    {
        $request->user()->authorizeRoles([ 'Administrador']);

        if($user = User::find($id)){
            $roles=Role::get();
            $rolUser= role_user::get();
            return view('usuarios.Editar', compact('user','roles','rolUser'));
        }
        return redirect('usuarios');
    }

    public function update(UserRequest $request, $id)
    {
        
        $user = User::find($id);
        $roles=Role::all();
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->roles()->sync($request->get('roles'));


       $user->save();

        return redirect()->route('usuarios.show', $user->id);
       
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('Aviso','La cuenta fue eliminada');
    }
}
