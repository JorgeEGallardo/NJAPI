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
    private $url=["https://adara5.s3.us-east-2.amazonaws.com/", "https://edere5.s3.us-east-2.amazonaws.com/"];
    private $disk =['s3', 's4'];
    public function awa($id, $url)
    {
        $connection = $url;
        app('db')->setDefaultConnection($connection);
        $routines = routines::where('patient_id','=',$id)->orderBy('day_id')->get();
        return response()->json($routines);
    }
    public function getRecipes($id, $url){
        $connection = $url;
        app('db')->setDefaultConnection($connection);
        $data= \DB::select('select * from recipes where patient_id = ?', [$id]);
        return response()->json($data);
    }
    public function getImages($id, $url){
        $connection = $url;
        app('db')->setDefaultConnection($connection);
        $data= \DB::select('select * from images where auth_by = ?', [$id]);
        $paths = array();
        $domain = $this->url[$url];
        $temp = '{}';
        foreach ($data as $image) {
            $temp = $domain.$image->path;
            array_push($paths, $temp);
        }
        return response()->json($paths);
    }
    public function pdfPost(Request $request, $url){
        $connection = $url;
        app('db')->setDefaultConnection($connection);
        $file = $request->file;
        $path = $request->file->getClientOriginalName();
        $split = explode('_', $path);
        $patient = "0";
        if(isset($split[2])){
        $patient = $split[2];
        $split = explode('.', $patient);
        $patient = $split[0];
        }
        $path = Storage::disk($this->disk[$url])->put('documents/registry', $request->file, 'public');

        $request->merge([
            'size' => $request->file->getClientSize(),
            'path' => $path,
            'auth_by' => $patient,
            'title' => "Asesoria".$patient
        ]);

        document::create($request->only('path', 'title', 'size', 'auth_by'));
        return 1;
    }
    public function getDocuments($id, $url){
        $connection = $url;
        app('db')->setDefaultConnection($connection);
        $data= \DB::select('select * from documents where auth_by = ? and visible = 1', [$id]);
        $paths = array();
        $domain = $this->url[$url];
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
