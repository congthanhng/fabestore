<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_model extends Model
{
    protected $table = "contact";
    protected $fillable = [
        'email', 'note'
    ];
}
