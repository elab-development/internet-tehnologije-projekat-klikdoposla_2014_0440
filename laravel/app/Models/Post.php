<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'text',
        'datum_objave',
        'profile_id', 
        'user_id',
];
    //use HasFactory;
    public $timestamps = true;
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
