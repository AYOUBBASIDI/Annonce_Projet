<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Post extends Model
{
    protected $fillable =[
        'id',
        'creator',
        'typeC',
        'type',
        'desc',
        'pic',
        'price',
    ];
    public function Users()
    {
        return $this->belongsTo(User::class);
    }

    // use HasFactory;
}
