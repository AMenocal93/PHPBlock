<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Role;
use App\User;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->authorizeRoles([ 'Administrador']);

        $roles = DB::table('roles')
                ->orderBy('id', 'asc')
                ->get();
        return view('Roles.index', ['roles' => $roles]);
    }

   
    public function create()
    {
       return View('Roles.create'); 
    }

   
    public function store(Request $request)
    {
        $roles= new Role($request->all());
        $roles->save();
        return back()->with('Aviso','Rol creado con exito');  
    }

    public function show($id)
    {
        $roles = Role::find($id);
        return view('Roles.show', ['roles' => $roles]);
    }

    public function edit($id)
    {
        $roles=Role::all();
        $roles = $roles->find($id);
       /*  dd($roles);*/
        return view('Roles.edit', ['roles' => $roles]);
     }

    public function update(request $request, $id)
    {
       // dd($roles);
        $roles=Role::all();
        $roles = $roles->find($id);
        $roles->name = $request->name;
        $roles->description = $request->description; 
        $roles->save();
        return redirect()->route('Roles.index');
    }

    public function destroy($id)
    {
      $roles = Role::find($id);
      $roles->delete();
      return back()->with('Aviso','La rol fue eliminado con exito');  
    }
}
