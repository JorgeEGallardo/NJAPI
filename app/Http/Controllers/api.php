<?php

namespace App\Http\Controllers;

use App\days;
use App\routines;
use Illuminate\Http\Request;

class api extends Controller
{
    public function awa($id)
    {
        $routines = routines::where('patient_id','=',$id)->orderBy('day_id')->get();
        return response()->json($routines);
    }
    public function getImages($id){
        $data= \DB::select('select * from images where auth_by = ?', [$id]);
        $paths = array();
        $domain = "https://adaraw.s3.us-east-2.amazonaws.com/";
        $temp = '{}';
        foreach ($data as $image) {
            $temp = $domain.$image->path;
            array_push($paths, $temp);
        }
        return response()->json($temp);
    }
     public function getDocuments($id){
        $data= \DB::select('select * from documents where auth_by = ? and visible = 1', [$id]);
        $paths = array();
        $domain = "https://adaraw.s3.us-east-2.amazonaws.com/";
        $temp = '{}';
        foreach ($data as $document) {
            $temp = $domain.$document->path;
            $doc = array(); 
            array_push($doc, $document->title);
            array_push($doc, $temp);
           array_push($paths, $doc);
        }
        return response()->json($paths);
    }

}
