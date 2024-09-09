<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'company', 
        'website', 
        'location',
        'status', 
        'skills', 
        'bio', 
        'githubusername',
        'experience',
        'education',
    ];
    use HasFactory;
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
