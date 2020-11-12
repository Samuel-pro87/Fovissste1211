<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\fovi_detalle_credito;
use App\Models\fovi_detalle_credito as ModelsFovi_detalle_credito;

class DatatableController extends Controller
{
    public function credito(){
$creditos = ModelsFovi_detalle_credito::select('id','idCredito','nombre', 'rfc', 'estatus', 'ejecutivo')->get();

//return $creditos;
return datatables()->of($creditos)->addColumn('btn', 'actions')->rawColumns(['btn'])->toJson();

    }
}
