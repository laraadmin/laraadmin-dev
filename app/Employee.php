<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        "name", "title", "mobile", "email", "dept", "role", "city", "address", "about", "date_birth", "date_hire", "date_left", "salary_cur"
    ];
    
    protected $hidden = [
        
    ];
}
