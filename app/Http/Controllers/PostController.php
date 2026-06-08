<?php

namespace App\Http\Controllers;

use App\Http\Requests\postRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index(){
        $data = DB::table('posts')->get();

        return response()->json([
            "data"=> $data,
        ]);
    }

    public function store(postRequest $request){
        $image_path = null;
        if($request->hasFile("image")){

        }
    }

    public function show(String $id){

    }

    public function edit(String $id){

    }

    public function update(){

    }
}
