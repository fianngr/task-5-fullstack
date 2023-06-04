<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\articleResource;
use App\Http\Resources\articleDetailResource;

class articlesController extends Controller
{
    public function index(){
        
        $articles = articles::with('user:id,username')->get();
        return articleResource::collection($articles);

    }

    public function show($id){
        
            $article = articles::with('user:id,username')->findOrFail($id);
            return new articleDetailResource($article); 
            
       
    }

    public function store(Request $request){
        $validated =$request->validate([
            'title'=> 'required',
            'excerpt'=>'required',
            'content'=>'required',
        ]);

        $request['user_id']= Auth::User()->id;
        $article = articles::create($request->all());

        return new articleDetailResource($article->LoadMissing('user:id,username')); 
    }

    public function update(Request $request,$id){
        $validated = $request->validate([
            'title'=> 'required',
            'excerpt'=>'required',
            'content'=>'required',
        ]);

        $article = articles::findOrFail($id);
        $article->update($request->all());
        return new articleDetailResource($article->LoadMissing('user:id,username'));
    }

    public function destroy($id){
        $article = articles::findOrFail($id);
        $article->delete();
        return new articleDetailResource($article->LoadMissing('user:id,username'));
    }
}
