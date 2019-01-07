<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer_model;
use App\Bill_model;
use App\BillDetail_model;

class User_controller extends Controller
{

	/* Xử lý lấy thông tin khách hàng  */
	public function getUserlist()
	{
		$user = Customer_model::all();
		return view('admin.customer.customer_list',compact('user'));
	}



	/* Lấy thông tin hóa đơn từ ID khách hàng*/
	public function getCart()
	{

		$cart = Bill_model::all();
   		return view('admin.customer.bill_list',compact('cart'));
	}
	public function getCartdetail()
	{

		$cartdetail = BillDetail_model::all();
   		return view('admin.customer.billdetail_list',compact('cartdetail'));
	}

	/* Xóa dữ liệu khách hàng */
	public function getUserdelete($id)
	{
		$userdelete = Customer_model::find($id);
		$userdelete->delete();
		return redirect()->back()->with('Notification','Deleted successfully');
	}
	public function getCartdelete($id)
	{
		$cartdelete = Bill_model::find($id);
		$cartdelete->delete();
		return redirect()->back()->with('Notification','Deleted successfully');
	}
	public function getCartdetaildelete($id)
	{
		$cartdetaildelete = Bill_model::find($id);
		$cartdetaildelete->delete();
		return redirect()->back()->with('Notification','Deleted successfully');
	}
}
