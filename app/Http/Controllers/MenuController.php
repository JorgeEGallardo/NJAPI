<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
class MenuController extends Controller
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
        //Nuevo menu
        //protected $fillable = ['name','portion', 'day_id','cat_id','patient_id'];
        $menu = new Menu;
        $menu->name = $request->name;
        $menu->portion=$request->portion;
        $menu->day_id =$request->day_id;
        $menu->cat_id= $request->cat_id;
        $menu->patient_id = $request->patient_id;
        $menu->save();
        return response()->json($menu);
    }

    public function getLunesId($id)
    {
        //Regresa el menu que tiene un paciente el lunes.
        $menu = Menu::where('patient_id','=',$id)->where('day_id','=',1)->get();
        return response()->json($menu);
    }
    public function getMartesId($id)
    {
        //Regresa el menu que tiene un paciente el martes.
        $menu = Menu::where('patient_id','=',$id)->where('day_id','=',2)->get();
        return response()->json($menu);
    }
    public function getMiercolesId($id)
    {
        //Regresa el menu que tiene un paciente el miercoles.
        $menu = Menu::where('patient_id','=',$id)->where('day_id','=',3)->get();
        return response()->json($menu);
    }
    public function getJuevesId($id)
    {
        //Regresa el menu que tiene un paciente el jueves.
        $menu = Menu::where('patient_id','=',$id)->where('day_id','=',4)->get();
        return response()->json($menu);
    }
    public function getMenu($id)
    {
        //Regresa el menu que tiene un paciente el viernes.
        $menu = Menu::where('patient_id','=',$id)->orderBy('day_id')->orderBy('cat_id')->get();
        return response()->json($menu);
    }
    public function getSabadoId($id)
    {
        //Regresa el menu que tiene un paciente el sabado.
        $menu = Menu::where('patient_id','=',$id)->where('day_id','=',6)->get();
        return response()->json($menu);
    }
    public function getDomingoId($id)
    {
        //Regresa el menu que tiene un paciente el domingo.
        $menu = Menu::where('patient_id','=',$id)->where('day_id','=',7)->get();
        return response()->json($menu);
    }

    public function destroyAll($id){
        $menu = Menu::where('patient_id','=',$id)->delete();
        return response()->json($menu);
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
        $menu = Menu::findOrFail($id);
        $menu->update($request->all());

        return $menu;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::find($id)->delete();

        return 204;
    }


}
