<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    function addPost(request $request){
        
        $post = new Post;
        $post->creator = $request->nom;
        $post->typeC = $request->typeC;
        $post->type = $request->type;
        $post->dsec = $request->dsec;
        $post->pic = $request->pic;
        $query = $post->save();

        if($query){
            return back()->with('success','Data have been successfuly inserted');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
}
