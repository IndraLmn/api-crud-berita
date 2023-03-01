<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostM extends Model
{
    use HasFactory;

    protected $table = 'Posts';
    protected $fillable = [
        'image',
        'title',
        'content',
    ];
}
