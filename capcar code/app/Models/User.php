<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class User extends Model
{

    protected $fillable =[
        'id',
        'fname',
        'lname',
        'email',
        'tel',
        'pwd',

    ];
    public function posts()
    {
        return $this->hasMany(Post::class, 'creator', 'id');
    }

    
    // use HasFactory;
}
