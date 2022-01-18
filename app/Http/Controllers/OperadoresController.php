<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Operadores;

class OperadoresController extends Controller
{
    /** 
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operadores = Operadores::all();


        return view('operadores.index', [
                'operadores' => $operadores
        ]);

//
    }



 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operadores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'licencia' => 'required',
            'correo' => 'required',
            'app_usr' => 'required|unique:operadores',
            'app_pass'
        ]);

        $operador = Operadores::create([
           'nombre'=> $request->input('nombre'),
           'licencia'=>$request->input('licencia'),
           'correo'=>$request->input('correo'),
           'app_usr'=>$request->input('app_usr'),
           'app_pass'=>md5($request->input('correo'))
        ]);


        return redirect('/operadores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $operador= Operadores::find($id);

        return view('operadores.show')->with('operador',$operador);
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
