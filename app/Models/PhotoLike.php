<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoLike extends Model
{
    use HasFactory;

    protected $table = 'likes';
    public $timestamps = false;
    protected $fillable = ['*'];

    public function photo(){
        return $this->belongsTo('App\Models\Photo', 'photo_id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
