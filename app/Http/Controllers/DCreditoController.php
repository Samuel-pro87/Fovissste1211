<?php

namespace App\Http\Controllers;

use App\Models\fovi_detalle_credito;
use Illuminate\Http\Request;

class DCreditoController extends Controller
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
        //$detalle = fovi_detalle_credito::select('rfc','nombre', 'id', 'idCredito', 'estatus')->orderby('rfc', 'asc')->where('estatus','VIGENTE')->take(5)->get();
        //$detalle = fovi_detalle_credito::select('rfc','nombre', 'id', 'idCredito', 'estatus')->orderby('rfc', 'asc')->where('estatus','VIGENTE')->get();
        //$detalle = fovi_detalle_credito::all();
        $detalles = fovi_detalle_credito::where('estatus','VIGENTE')->paginate(20);
        //return $detalle;
        return view('detalleCredito.datatables', compact('detalles'));
       // Route::view('/detalleCredito/datatables', 'pages.datatables');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('detalleCredito.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //   return $request->all();

        $det = new fovi_detalle_credito();

        $data = $det::all()->last()->id;
        $data = $data+1;
        $det->nombre = $request->nombre;
        $det->rfc = $request->rfc;
        $det->colonia = $request->curp;
        $det->idCredito = $request->idCredito;
        $det->estatusLaboral = $request->estatusL;
        $det->estatus = $request->estatus;
        $det->ejecutivo = $request->ejecutivo;

        $det->id = $data;

        $det->save();

        //return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $det = fovi_detalle_credito::find($id);
        //return $det;

        return view('detalleCredito.show', compact('det'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
