<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomepageController extends BaseController{

    public function index(){
        if(session('username') == null){
            return redirect('login');
        } else {
            $user = $this->getUserInfo(session("username"));
            return view('homepage')->with("user", $user);
        }
    }

    private function getUserInfo($username){
        $user = User::where('username', $username)->first();
        return $user;
    }

    public function getPosts($user_id){
        $posts = Post::where("username", session("username"))->get();

        return $posts;
    }

    public function createPost(){
        $request = request();
        $newPost = new Post;
        $newPost->title = $request['title'];
        $newPost->content = $request['comment'];
        $newPost->username = session("username");
        $newPost->num_likes = 0;
        $newPost->num_comments = 0;
        $newPost->save();

        if($newPost){
            return redirect('home');
        }

    }

    public function getMeteo(){
        $api_key = "5f0b554d60ea4341b26164613221405";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,
        "http://api.weatherapi.com/v1/current.json?key=".$api_key."&q=Catania&aqi=no&lang=it");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
    
        return $result;
    }

}



?>