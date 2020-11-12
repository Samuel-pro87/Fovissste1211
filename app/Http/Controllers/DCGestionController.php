<?php

namespace App\Http\Controllers;

use App\Models\codigo_action;
use App\Models\fovi_detalle_gestion;
use App\Models\resultado_action;
use Illuminate\Http\Request;

class DCGestionController extends Controller
{
    /**
     * Create a new controller instance.
     *
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
        //
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
        $request->validate([
            'telefono' => 'exists:App\Models\fovi_detalle_telefono,telefono'

        ]);



        return $request->all();
          //  return $request->idCredito;
        //$ges = new fovi_detalle_gestiones();

         /*return $ges;
         $ges->idCredito = $request->idCredito;
         $ges->ejecutivo =$request->ejecutivo;
         $ges->accion =$request->accion;
         $ges->resultado = $request->resultado;
         $ges->telefono = $request->telefono;
         $ges->tipo = $request->tipo;
         $ges->contacto = $request->contacto;
         $ges->parentesco = $request->parentesco;
         $ges->comentario = $request->comentario;

         $ges->save();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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

    public function getCodigos(Request $request){

            //return 'good';
        if($request->ajax()){
            $resultados = resultado_action::where('codigo_id', $request->id)->get();

            foreach($resultados as $resultado){
                $resultadoArray[$resultado->id] = $resultado->estatus;
            }
            return response()->json($resultadoArray);
        }
    }

}
