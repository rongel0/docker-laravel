<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menter extends Model
{
    protected $fillable =[
        'name',
        'tel',
        'teaching_languages',
        'experience_years',
        'introduction',
    ];
}
