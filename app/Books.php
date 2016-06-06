<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
    
    protected $fillable = [
        'name',
        'author',
        'price',
        'pages',
        'genre',
        'description',
        'date_release',
    ];
}
