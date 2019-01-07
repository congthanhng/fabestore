<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide_model extends Model
{
    protected $table = "slide";
    
    protected $fillable = [
        'name', 'description','link','image'
    ];
    public $timestamps = false;
}
