<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tag';
    public $timestamps = false;
    protected $fillable = ['name'];

    public function photo(){
        return $this->belongsToMany('App\Models\Photo', 'photo_tag', 'tag_id', 'photo_id');
    }
}
