<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends BaseController {
    
    public function login() {
        if(session('username') != null){
            return redirect('home');
        } else {
            return view('login')->with('errore', false);
        }
    }

    public function checkLogin(){
        $user = User::where('username', request('username'))->where('password', request('password'))->first();

        if($user !== null){
            Session::put('username', $user->username);
            return redirect("home");
        } else {
            return view('login')->with('errore', true);
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login');
    }
}

?>
