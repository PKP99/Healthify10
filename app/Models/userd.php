<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userd extends Model
{
    protected $table = 'userd';
    use HasFactory;
    protected $fillable = [
        'Email','Weight', 'Height', 'DOB', 'Gender', 'BMR'
    ];
}
