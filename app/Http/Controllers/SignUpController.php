<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SignUpController extends BaseController {
    
    public function index(){
        return view('signup');
    } 

    public function create(){
        $request = request();
        if($this->checkErrors($request) === 0){
            $newUser = new User;
            $newUser->name = $request['name'];
            $newUser->lastname = $request['lastname'];
            $newUser->email = $request['email'];
            $newUser->username = $request['username'];
            $newUser->password = $request['password'];
            $newUser->save();
            
            if($newUser){
                return redirect('login');
            }
        }
    }

    private function checkErrors($data){
        $error = array();
        
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $data['username'])) {
            $error[] = "Username non valido";
        } else {
            $username = User::where('username', $data['username'])->first();
            if ($username !== null) {
                $error[] = "Username già utilizzato";
            }
        }
        if (strlen($data["password"]) < 8) {
            $error[] = "Password troppo corta";
        } 

        if(strlen($data["name"]) == 0) {
            $error[] = "Nome non valido";
        }

        if(strlen($data["lastname"]) == 0) {
            $error[] = "Cognome non valido";
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Email non valida";
        } else {
            $email = User::where('email', $data['email'])->first();
            if ($email !== null) {
                $error[] = "Email già utilizzata";
            }
        }

        return count($error);
    }

    public function checkUsername($username){
        $exist = User::where('username', $username)->exists();
        return ['exists' => $exist];
    }

    public function checkEmail($email){
        $exist = User::where('email', $email)->exists();
        return ['exists' => $exist];
    }

    public function test(){
        return "signup";
    }
}

?>