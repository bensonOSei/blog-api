<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

// php artisan make:model Post -m
    protected $fillable = [
        'title',
        'slug',
        'body',
    ];

}
