<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    public function posts(){
        return $this->hasMany("Post", "username", "username");
    }

    public function like(){
        return $this->hasMany("Like", "user", "username");
    }

    public function comment(){
        return $this->hasMany("Like", "user", "username");
    }
}
