<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Slide_model;
use App\Product_model;
use App\Trending_model;
use App\ProductType_model;
use App\Cart;
use App\Customer_model;
use Session;
use App\Bill_model;
use App\BillDetail_model;
use App\User;
use App\Contact_model;
use Validator;
use Auth;
use Hash;
class Page_controller extends Controller
{
	/* Xử lý lấy dữ liệu sản phẩm hiện ra trang Home */
	public function getIndex(){
		$slide = Slide_model::all();
		$trend = Trending_model::all();
		$all_product = Product_model::get();
		return view('page.home',compact('slide','trend','all_product'));
	}
	/* Xử lý lấy điều kiện sản phẩm trang Best seller (lượt mua > 15 sẽ in ra) */
	public function getBestseller(){
    	// Select condition for product best seller > 15
		$bestseller = Product_model::where('buy','>=',15)->get();
		return view('page.best_seller',compact('bestseller'));
	}
	/* Xử lý điều kiện sản phẩm trong trang sale*/
	public function getSale(Request $req){
		$saleproduct = Product_model::where('promotion_price','>',0)->get();
		return view('page.sale', compact('saleproduct'));
	}
	/*Xử lý viewshare cho header từ bảng ProductType*/
	public function getTypeproduct($type){
		$type_product = Product_model::where('id_type', $type) ->get();
		$name_type = ProductType_model::where('id', $type)->first();
		return view('page.type_product',compact('type_product','name_type'));
	}
	/* Xử lý trang thông tin chi tiết sản phẩm */
	public function getProductdetail(Request $req){
		$sanpham = Product_model::where('id',$req->id)->first();
		return view('page.product-detail',compact('sanpham'));
	}
	public function getProductquick(Request $req){
		$sanpham_quick = Product_model::where('id',$req->id)->first();
		return view('master',compact('sanpham_quick'));
	}
	/* Xử lý trang thông tin Contact */
	public function getContact(){
		return view('contact');
	}
	/* Xử lý trang thông tin About */
	public function getAbout()
	{
		return view('page.about');
	}
	/* Xử lý tác vụ thêm thông tin sản phẩm vào cart*/
	public function getAddtocart(Request $req,$id){
		$product = Product_model::find($id);
		$oldCart = Session('cart')?Session::get('cart'):null;
		$cart = new Cart($oldCart);
		$cart->add($product,$id);
		$req->Session()->put('cart',$cart);
		return redirect()->back();
	}
	/* Xử lý xóa sản phẩm trong cart*/
	public function getDelcart($id){
		$oldCart = Session::has('cart')?Session::get('cart'):null;
		$cart = new Cart($oldCart);
		$cart->removeItem($id);
		if(count($cart->items)>0){
			Session::put('cart',$cart);
		}
		else{
			Session::forget('cart');
		}
		Session::put('cart',$cart);
		return redirect()->back();
	}
	/* Xử lý hiện thông tin sản phẩm trong cart ra page checkout*/
	public function getCheckout(){
		if(Session('cart')){
			$oldCart = Session::get('cart');
			$cart = new Cart($oldCart);
			return view('page.checkout',[
				'product_cart'=>$cart->items, 
				'totalPrice'=>$cart->totalPrice,
				'totalQty'=>$cart->totalQty
			]);
		}
		return view('page.checkout');
	}
	/* Xử lý nhận dữ liệu trong form của trang checkout */
	public function postCheckout(Request $req){
		/* Xử lý nhận dữ liệu của bảng customer */
		$cart = Session::get('cart');
		$customer = new Customer_model;
		$customer->name = $req->name;
		$customer->email = $req->email;
		$customer->address = $req->address;
		$customer->phone_number = $req->phone;
		$customer->note = $req->note;
		$customer-> save();
		/* Xử lý nhận dữ liệu của bảng Bill */
		$bill = new Bill_model;
		$bill->id_customer = $customer->id;
		$bill->date_order = date('Y-m-d');
		$bill->total = $cart->totalPrice;
		$bill->payment = $req->payment_method;
		$bill->note = $req->note;
		$bill->save();
		/* Xử lý nhận dữ liệu của bảng BillDetail */
		foreach($cart->items as $key=>$value){
			$bill_detail = new BillDetail_model;
			$bill_detail->id_bill = $bill->id;
			$bill_detail->id_product = $key;
			$bill_detail->quantity = $value['qty'];
			$bill_detail->unit_price = $value['price']/$value['qty'];
			$bill_detail->save();
		}
		Session::forget('cart');
		return redirect()->back()->with('Notification','Order Success!');
	}
	/* Xử lý thông tin đăng ký từ trang res */
	public function getRes(){
		return view('page.res');
	}
	public function postRes(Request $req){
		$this->validate($req,
			[
				'email'=>'required|email|unique:users',
				'password'=>'required|min:6|max:20',
				'name' =>'required|min:1|max:20',
				're_password'=>'required|same:password'
			],
			[
				'name.required'=>'*Enter your username.',
				'email.required'=>'*Enter your E-mail.',
				'email.email'=>'*Must be a valid E-mail',
				'email.unique'=>'*The E-Mail address has already been taken.',
				'name.unique'=>'*The username has already been taken.',
				'password.required'=>'*Enter your password.',
				're_password.same'=>'*Passwords must match.',
				'password.min'=>'*Your password at least 6 characters.',
				'name.min'=>'*Your name at least 1 characters.'
			]);
		$user = new User();
		$user->name = $req->name;
		$user->email = $req->email;
		$user->password = Hash::make($req->password);
		$user->save();
		return redirect()->back()->with('Notification','Account successfully created');
	}
	/* Xử lý trang Log-in*/
	public function getLogin(){
		return view('page.login');
	}
	public function postLogin(Request $req){
		$this->validate($req,
			[
				'email'=>'required|email',
				'password'=>'required|min:6|max:20'
			]);
		$credentials = array
		(
			'email'=>$req->email,
			'password'=>$req->password
		);
		if(Auth::attempt($credentials)){
			return redirect()->back()->with(['flag'=>'success','Notification'=>'Logged in successfully. ']);
		}
		else{
			return redirect()->back()->with(['flag'=>'danger','Notification'=>'Logged fail.']);
		}
	}
	/* Xử lý chức năng tìm kiếm */
	public function getSearch(Request $req){
		$product = Product_model::where('name','like','%'.$req->key.'%')->orWhere('unit_price',$req->key)->get();
		return view('page.search',compact('product'));
	}
	public function getBlog()
	{
		return view('page.blog');
	}
	/* Xử lý thông tin trang Contact */
	public function postContact(Request $req)
	{
		$this->validate($req,
			[
				'email'=>'required|email',
			],
			[
				'email.required'=>'*Enter your E-mail.',
				'email.email'=>'*Must be a valid E-mail',
			]);
		$datacontact = new Contact_model();
		$datacontact->email = $req->email;
		$datacontact->save();
		return redirect()->back()->with('Notification','Send E-mail success!');
	}
	/* Xử lý thông tin phần Footer */
	public function getFooter()
	{
		return view('footer');
	}
	public function postFooter(Request $req)
	{
		$this->validate($req,
			[
				'email'=>'required|email',
			],
			[
				'email.required'=>'*Enter your E-mail.',
				'email.email'=>'*Must be a valid E-mail',
			]);
		$footercontact = new Contact_model();
		$footercontact->email = $req->email;
		$footercontact->save();
		return redirect()->back()->with('Notification','Send E-mail success!');
	}
	/* Xử lý chức năng đăng xuất*/
	public function postLogout(){
		Auth::logout();
		return redirect()->route('index-page');
	}
}