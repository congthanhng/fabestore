<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail_model extends Model
{
	protected $table = "bill_detail";
	protected $fillable = [
        'id_bill', 'id_product', 'quantity','unit_price'
    ];

	public function product(){
		return $this->belongsTo('App\Product_model','id_product','id');
	}

	public function bill(){
		return $this->belongsTo('App\Bill_model','id_bill','id');
	}
}

