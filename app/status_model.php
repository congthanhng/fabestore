<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status_model extends Model
{
    protected $table = "status";
    protected $fillable = [
        'name'
    ];
    public function bill(){
		return $this->hasMany('App\Bill_model','id_status','id');
	}
	public $timestamps = false;
}
