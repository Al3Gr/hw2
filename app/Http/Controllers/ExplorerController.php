<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ExplorerController extends BaseController{
    public function index(){
        if(session('username') == null){
            return redirect('login');
        } else {
            $user = $this->getUserInfo(session("username"));
            return view('explorer')->with("user", $user);
        }
    }

    private function getUserInfo($username){
        $user = User::where('username', $username)->first();
        return $user;
    }
}