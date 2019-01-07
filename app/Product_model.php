<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_model extends Model
{
    protected $table = "products";

    protected $fillable = [
        'name', 'id_type', 'description','unit_price','promotion_price','image','type','gender','buy','quantity'
    ];

   public  function product_type(){
    	return $this->belongsTo('App\ProductType_model','id_type','id');
    }

    public function bill_detail(){
    	return $this->hasMany('App\BillDetail_model','id_product','id');
    }
}
