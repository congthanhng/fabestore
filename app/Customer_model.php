<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_model extends Model
{
    protected $table = "customer";
    protected $fillable = [
        'name', 'name', 'email','address','phone_number','note'
    ];

    public function bill(){
		return $this->hasMany('App\Bill_model','id_customer','id');
	}
}
