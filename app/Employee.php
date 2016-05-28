<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    
    protected $fillable = [
        "name", "designation", "mobile", "mobile2", "email", "gender", "dept", "role", "city", "address", "about", "date_birth", "date_hire", "date_left", "salary_cur"
    ];
    
    protected $hidden = [
        
    ];
}
