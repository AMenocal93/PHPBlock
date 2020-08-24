<?php

namespace App\Http\Controllers;
use App\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //retornano vista vacia
        return view('bloques.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($proyecto = Proyectos::find($id)) {
            $Id_User = Auth::user()->id;
            if($Id_User == $proyecto->user_id){
                return view('bloques.index', compact('proyecto'));
                //
            }
            if($Id_User != $proyecto->user_id){ //|| (is_null($proyecto)){
                return redirect('proyectos');
            }
        }
        return redirect('proyectos');     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /** 
     * Especificando funcion para ejecucion de codigo
     * Mostrando ejecucion de codigo en vista externa
    */
    public function execute(Request $request)
    {
        if(isset($_POST['Ejecutar']))
        {
            //llamando a la vista de ejecucion
            //$bloques = new Block();
            //$bloques->codigo =  $request->input('code_generated');
            $codigo =  $request->input('codigo_generated');
            return view('bloques.ejecucion')->with('codigo',$codigo);
            //dd($codigo);
            
        }
        else if(isset($_POST['Guardar']))
        {
            $id = $request->input('id');
            $codigo_generated =  $request->input('codigo_generated');

            if($proyecto = Proyectos::find($request->input('id'))){
                $proyecto->code =$codigo_generated;
                $proyecto->save();
                return redirect()->route('proyectos.index');
            }
        } 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
