<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Post extends Authenticatable
{
    public function user(){
        return $this->belongsTo("User");
    }

    public function like(){
        return $this->hasMany("Like");
    }

    public function comment(){
        return $this->hasMany("Comment");
    }
}