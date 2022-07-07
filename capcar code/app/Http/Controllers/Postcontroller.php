<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Postcontroller extends Controller
{


    function annonce()
    {
        if(session()->has('LoggedUser')){
        $user = User::where('id', '=' , session('LoggedUser'))->first();
        $annonce = array('type' => "Annonce");
        $postsA = Post::join('users', 'users.id', '=', 'posts.creator')->where($annonce)->get();
        $owner = array('fname' => $user->fname);
        $info = User::where($owner)->get();
       return view('/annonces',['postsA'=>$postsA],['info'=>$info]);
    }
    }
    function order()
    {
        if(session()->has('LoggedUser')){
        $user = User::where('id', '=' , session('LoggedUser'))->first();
        $order = array('type' => "Ordre");
        $postsO = Post::join('users', 'users.id', '=', 'posts.creator')->where($order)->get();
        $owner = array('fname' => $user->fname);
        $info = User::where($owner)->get();
       return view('/orders',['postsO'=>$postsO],['info'=>$info]);
        }
    }
    function annonceP()
    {
        if(session()->has('LoggedUser')){
        $user = User::where('id', '=' , session('LoggedUser'))->first();
        $annonce = array('type' => "Annonce" , 'creator' => $user->id);
        $postsA = Post::where($annonce)->get();
        $owner = array('fname' => $user->fname);
        $info = User::where($owner)->get();
        return view('/annonProfile',['postsA'=>$postsA],['info'=>$info]);
        }
    }
    function orderP()
    {
        if(session()->has('LoggedUser')){
        $user = User::where('id', '=' , session('LoggedUser'))->first();
        $order = array('type' => "Ordre" , 'creator' => $user->id);
        $postsO = Post::where($order)->get();
        $owner = array('fname' => $user->fname);
        $info = User::where($owner)->get();
       return view('/orderprofile',['postsO'=>$postsO],['info'=>$info]);
        }
    }

    function index()
    {
    //    $posts = Post::with('users')->get();
    //    $users = User::with('posts')->get();
        //  return view('/yourannonce',['posts'=>$posts,'users'=>$users]);
    }


    function addPost(request $request){
        
        $post = new Post;
        $post->creator = $request->id;
        $post->typeC = $request->typeC;
        $post->type = $request->type;
        $post->dsec = $request->desc;
        $post->pic = $request->pic;
        $post->price = $request->price;
        $query = $post->save();

        if($query){
            return back()->with('success','Data have been successfuly inserted');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
    function delete($id){
        $delete = DB::table('posts')
                ->where('id',$id)
                ->delete();
        return redirect('CP_annonces');
    }
    function fill($id){
        $post = array('id' => $id);
        $fill = Post::where($post)->get();
        return view('/update',['fill'=>$fill]);
    }
    function fupdate(request $request){
        $updating = DB::table('posts')
                    ->where('id', $request->input('id'))
                    ->update([
                        'type'=>$request->input('type'),
                        'typeC'=>$request->input('typeC'),
                        'price'=>$request->input('price'),
                        'pic'=>$request->input('pic'),
                        'dsec'=>$request->input('desc'),
                    ]);
        return redirect('CP_annonces');
    }
}
