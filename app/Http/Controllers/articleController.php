<?php

namespace App\Http\Controllers;

use App\Models\articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\articleResource;
use App\Http\Resources\articleDetailResource;

class articleController extends Controller
{
    public function index(){
    
        $articles = articles::with('user:id,username')->get();
        $articles = articleResource::collection($articles);
        return view('articles',[
            "title"=>"alfian",
            "articles"=>$articles
        ]); 
    }


    public function show($id){

        // $article = articles::with('user:id,username')->findOrFail($id);
        // return new articleDetailResource($article); 
        $articles = articles::with('user:id,username')->findOrFail($id);
        // $articles = new articleDetailResource($articles);
        return view('article',[
            "title"=>"alfian",
            "article"=>$articles
        ]); 
    }
    
    // public function login(Request $request){
    //     $http = new \GuzzleHttp\Client;
    //     $response = $http->post('http://localhost:8000/api/auth/login?',[
    //         'headers'=>[
    //             'Authorization'=>'bearer'.session()->get('token.acces_token')
    //         ],
    //         'query'=>[
    //             'email'=>'alfian@gmail.com',
    //             'password'=>'password123'
    //         ]
    //         ]);

    //         $result = json_decode((string)$response->getBody(),true);
    //         return dd($result);

        // $data = Http::get('http://localhost:8000/api/articles/4');
        // dd($data->json());
    // }

}
