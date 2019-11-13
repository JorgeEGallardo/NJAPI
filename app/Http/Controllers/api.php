<?php

namespace App\Http\Controllers;

use App\days;
use App\routines;
use Illuminate\Http\Request;

use App\document;
use App\Http\Requests\StoreDocument;
use Illuminate\Support\Facades\Storage;

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
    public function pdfPost(Request $request){
        $file = $request->file;
        $path = $request->file->getClientOriginalName();
        $split = explode('_', $path);
        $patient = "0";
        if(isset($split[2])){
        $patient = $split[2];
        $split = explode('.', $patient);
        $patient = $split[0];
        }
        $path = Storage::disk('s3')->put('documents/registry', $request->file, 'public');

        $request->merge([
            'size' => $request->file->getClientSize(),
            'path' => $path,
            'auth_by' => $patient,
            'title' => "Asesoria".$patient
        ]);

        document::create($request->only('path', 'title', 'size', 'auth_by'));
        return 1;
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
