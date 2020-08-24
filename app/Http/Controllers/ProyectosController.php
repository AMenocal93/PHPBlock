<?php

namespace App\Http\Controllers;
use App\Proyectos;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyectos::orderBy('created','DESC')->paginate();
        return view('proyectos.Proyecto', compact('proyectos')); 
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.create');
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
        $id=0;
        $i=1;

        Proyectos::create($request->all());
        $pro = Proyectos::orderBy('id','DESC')->paginate();
        
        foreach($pro as $item)
        {
            if($i =="1")
            {
                $id=$item->id;
                $i=$i+1;
            }
        }
        $proyecto= Proyectos::find($id);
        return view('bloques.index', compact('proyecto'));
        /**
        * $datosProyecto=request()->except('_token');
        * Proyectos::insert($datosProyecto);
        * return response()->json($datosProyecto);
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyectos=Proyectos::find($id);
        return  view('proyectos.VerDetalle',compact('proyectos'));
 
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyectos = Proyectos::find($id);
        return view('proyectos.edit', compact('proyectos'));
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
        $proyecto = Proyectos::find($id);
        
        $proyecto->code = $request->input('code');
        $proyecto->save();
        return redirect()->route('proyectos.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proyectos::find($id)->delete();
        return back();
    }
}
