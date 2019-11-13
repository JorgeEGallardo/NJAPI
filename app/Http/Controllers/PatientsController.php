<?php

namespace App\Http\Controllers;
use App\patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showAll()
    {
        //Mostrar todos los pacientes
        $patient = Patients::all();
        return response()->json($patient);
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
        //Ingresar un nuevo paciente
        $patient = new Patients;
        $patient->username  = $request->username;
        $patient->password  = $request->password;
        $patient->save();
        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patients::where('id','=',$id)->get();
        return response()->json($patient);
    }

    public function login(Request $request){
        $username  = $request->username;
        $password  = $request->password;

        $patient = Patients::where('username','=',$username)->where('password','=',$password)->get();

        if (empty(json_decode($patient))) {
            return 0;
        }else {
            return response()->json($patient[count($patient)-1]);
        }
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
        $patient = Patients::findOrFail($id);
        $patient->update($request->all());

        return $patient;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patients::find($id)->delete();

        return 204;
    }
}
