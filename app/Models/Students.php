<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
   // protected $fillabe = ['first_name', 'last_name',''];
    protected $guarded =[];
    use HasFactory;
}
