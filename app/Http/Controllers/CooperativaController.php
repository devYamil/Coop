<?php

namespace Coop\Http\Controllers;
use Coop\Cooperativa;
use Illuminate\Http\Request;

class CooperativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('principal.inicio');
    }
    public function federaciones($id_federacion=null){
        $nombreCooperativa = "";
        $descripcion = "";

        switch ($id_federacion) {
            case 5:
                $nombreCooperativa = "FECOTEL";
                $descripcion = "FEDERACION DE COOPERATIVAS DE TELECOMUNICACION";
                break;
            case 9:
                $nombreCooperativa = "FENCOPAS";
                $descripcion = "FEDERACION NACIONAL DE COOPERATIVAS DE SERVICIOS DE AGUA POTABLE Y SANEAMIENTO R.L.";
                break;
            case 22:
                $nombreCooperativa = "feee";
                $descripcion = "fee";
                break;
            default:
                $nombreCooperativa = "CONCOBOL";
                $descripcion = "Confederación Nacional de Cooperativas de Bolivia";
        }

        return view('cooperativas.federaciones-page', array("nombre_federacion"=>$nombreCooperativa, "descripcion"=>$descripcion));
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
        $cooperativas = Cooperativa::all();
        return view('cooperativas.cooperativas', compact('cooperativas'));
    }

    public function getCooperativasJson(){
        $cooperativas = Cooperativa::all();
        return response()->json([
            'cooperativas' => $cooperativas
        ], 200);
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
