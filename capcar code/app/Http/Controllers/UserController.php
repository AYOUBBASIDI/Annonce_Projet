<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;
use App\Models\User;

class UserController extends Controller
{
    function index(){
        return view('login');
    }
    function addUser(request $request){

        $user = new User;
        $user->fname = $request->nom;
        $user->lname = $request->prenom;
        $user->email = $request->email;
        $user->tel = $request->telephone;
        $user->pwd = Hash::make($request->passe);
        $query = $user->save();

        if($query){
            return back()->with('success','Data have been successfuly inserted');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
    function loginUser(request $request){
        //  return $request->input();
        $user = User::where('email' ,'=', $request->email)->first();
        if($user){
            if(Hash::check($request->passe,$user->pwd)){
                $request->session()->put('LoggedUser',$user->id);
                return redirect('/C_annonces');
            }else{
                return back()->with('fail','Password is incorrect');
            }
        }else{
            return back()->with('fail','No Account');
        }
    }
    // function profile(){
    //     if(session()->has('LoggedUser')){
    //         $user = User::where('id', '=' , session('LoggedUser'))->first();
    //         $data =[
    //             'LoggedUserInfo'=>$user
    //         ];
    //     }
    //     return view('annonprofile',$data); 
    // }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
        echo "hello";
    }
    // function addPost(request $request){
        
    //     $post = new Post;
    //     $post->creator = $request->fname;
    //     $post->typeC = $request->typeC;
    //     $post->type = $request->type;
    //     $post->dsec = $request->desc;
    //     $post->pic = $request->pic;
    //     $query = $post->save();

    //     if($query){
    //         return back()->with('success','Data have been successfuly inserted');
    //     }else{
    //         return back()->with('fail','Something went wrong');
    //     }
    // }


}
