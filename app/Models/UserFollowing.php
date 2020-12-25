<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFollowing extends Model
{
    use HasFactory;
    protected $table = 'user_following';
    public $timestamps = false;
    protected $fillable = ['*'];

    public function following(){
        return $this->belongsTo('App\Models\User', 'following_user_id');
    }

    public function follower(){
        return $this->belongsTo('App\Models\User', 'follower_user_id');
    }

    public function getAllow(){
        return $this->allow;
    }
}

