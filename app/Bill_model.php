<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_model extends Model
{
    protected $table = "bills";
    protected $fillable = [
        'id_customer', 'data_order', 'total','payment','note','id_status'
    ];

    public function bill_detail(){
		return $this->hasMany('App\BillDetail_model','id_bill','id');
	}

	public function customer(){
		return $this->belongsTo('App\Customer_model','id_customer','id');
	}
	public function statu(){
		return $this->belongsTo('App\status_model','id_status','id');
	}
}
