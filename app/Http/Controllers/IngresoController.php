<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngresoRequest;
use App\Models\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Ingreso::with('colaborador','tipoIngreso')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIngresoRequest $request)
    {
        if(Ingreso::whereDate('fecha_ingreso',now())->where(['tipo_ingreso_id' => $request->tipo_ingreso, 'colaborador_id' => $request->codigo])->first()){
            return response()->json(['message' => "Ya se ha registrado el ingreso"], 422);  
        }

        $ingreso = Ingreso::create([
            'colaborador_id' => $request->codigo,
            'tipo_ingreso_id' => $request->tipo_ingreso,
            'fecha_ingreso' => now()
        ]);

        $response = Ingreso::where('id', $ingreso->id)->with('colaborador')->first();

        return response()->json($response, 200);
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
