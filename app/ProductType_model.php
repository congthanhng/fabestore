<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType_model extends Model
{
    protected $table = "type_products";

    protected $fillable = [
        'name', 'link', 'description','image'
    ];

    public function product(){
    	return $this->hashMany('App\ProductType_model','id_type','id');
    }
}
