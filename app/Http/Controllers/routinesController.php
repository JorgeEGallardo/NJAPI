<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\routines;
class routinesController extends Controller
{
    public function showAll()
    {
        //Mostrar todos los pacientes
        $routine = Routines::all();
        return response()->json($routine);
    }
    public function getLunesId($id)
    {
        //Regresa el routine que tiene un paciente el lunes.
        $routine = Routines::where('patient_id','=',$id)->where('day_id','=',1)->get();
        return response()->json($routine);
    }
    public function getMartesId($id)
    {
        //Regresa el routine que tiene un paciente el martes.
        $routine = Routines::where('patient_id','=',$id)->where('day_id','=',2)->get();
        return response()->json($routine);
    }
    public function getMiercolesId($id)
    {
        //Regresa el routine que tiene un paciente el miercoles.
        $routine = Routines::where('patient_id','=',$id)->where('day_id','=',3)->get();
        return response()->json($routine);
    }
    public function getJuevesId($id)
    {
        //Regresa el routine que tiene un paciente el jueves.
        $routine = Routines::where('patient_id','=',$id)->where('day_id','=',4)->get();
        return response()->json($routine);
    }
    public function getViernesId($id)
    {
        //Regresa el routine que tiene un paciente el viernes.
        $routine = Routines::where('patient_id','=',$id)->where('day_id','=',5)->get();
        return response()->json($routine);
    }
    public function getSabadoId($id)
    {
        //Regresa el routine que tiene un paciente el sabado.
        $routine = Routines::where('patient_id','=',$id)->where('day_id','=',6)->get();
        return response()->json($routine);
    }
    public function getDomingoId($id)
    {
        //Regresa el routine que tiene un paciente el domingo.
        $routine = Routines::where('patient_id','=',$id)->where('day_id','=',7)->get();
        return response()->json($routine);
    }


    //Desuso
    /*
    public function destroy($id)
    {
        Routines::find($id)->delete();

        return 204;
    }
    public function update(Request $request, $id)
    {
        $routine = Routines::findOrFail($id);
        $routine->update($request->all());

        return $routine;
    }
    public function edit($id)
    {
        //
    }
    public function show($id)
    {
        //
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

    public function store(Request $request)
    {

        $routine = new Routines;
        $routine = $request->all();
        $routine = Routines::create($routine);

        return response()->json($routine);
    }
       */
}
