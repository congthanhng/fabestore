<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ProductType_model;
use App\Slide_model;
use App\stdClass;
use App\Product_model;
class Admin_controller extends Controller
{

  /*Xử lý cate_list*/
  public function getCatelist()
  {
   $catelist = ProductType_model::all();
   return view('admin.cate.cate_list',compact('catelist'));
 }
 /*Xử lý cate_add*/
 public function getCateadd()
 {
   return view('admin.cate.cate_add');
 }
 public function postCateadd(Request $req)
 {
   $this->validate($req,
    [
     'name' =>'required|unique:type_products|min:1|max:20',
     'link' =>'required|unique:type_products|min:1|max:20',
   ]);
   $cateadd = new ProductType_model;
   $cateadd->name = $req->name;
   $cateadd->link = $req->  link;
   /*   $catelist->status = $req->status;*/
   $cateadd->save();
   return redirect()->back()->with('Notification','Add successfully');
 }
 /*Xử lý cate_delete*/
 public function getCatedelete($id)
 {
   $catedelete = ProductType_model::find($id);
   $catedelete->delete();
   return redirect()->back()->with('Notification','Deleted successfully');
 }
 /*Xử lý cate_edit*/
 public function getCateedit($id)
 {
   $cateedit = ProductType_model::find($id);
   return view('admin.cate.cate_edit',compact('cateedit'));
 }
 public function postCateedit(Request $req, $id)
 {

   $cateedit = ProductType_model::find($id);
   $this->validate($req,
    [
     'name' =>'required',
     'link' =>'required'
     /*'status' =>'required',*/
   ]);

   $cateedit->name = $req->name;
   $cateedit->link = $req->link;
   /*$cateedit->status = $req->status;*/  
   $cateedit->save();
   return redirect()->back()->with('Notification','Edit successfully');
 }
 /* Xử lý Slide */
 public function getSlidelist()
 {
   $slidelist = Slide_model::all();
   return view('admin.slide.slide_list',compact('slidelist'));
 }
 public function getSlideadd()
 {
   return view('admin.slide.slide_add');
 }
 public function postSlideadd(Request $req)
 {
  $this->validate($req,
    [
      'name' =>'required|min:1|max:20',
      'description' => 'required',
      'link' =>'required|min:1|max:20',
      'image'=>'required',
    ]);
  $slideadd = new Slide_model;
  $slideadd->name = $req->name;
  $slideadd->description = $req->description;
  $slideadd->image = $req->image;
  $slideadd->link = $req->link;
  $slideadd->save();
  return redirect()->back()->with('Notification','Add successfully');
}
/*Xử lý slide_delete*/
public function getSlidedelete($id)
{
  $slidedelete = Slide_model::find($id);
  $slidedelete->delete();
  return redirect()->back()->with('Notification','Deleted successfully');
}
/*Xử lý slide_edit*/
public function getSlideedit($id)
{
  $slideedit = Slide_model::find($id);
  return view('admin.slide.slide_edit',compact('slideedit'));
}
public function postSlideedit(Request $req, $id)
{
  $slideedit = Slide_model::find($id);
  $this->validate($req,
    [
     'name' =>'required|min:1|max:255',
     'description' =>'required|min:1|max:255',
     'image'=>'required',
   ]);
  $slideedit->name = $req->name;
  $slideedit->description = $req->description;
  $slideedit->image = $req->image;
  /*$cateedit->status = $req->status;*/
  $slideedit->save();
  return redirect()->back()->with('Notification','Edit successfully');
}

public function getProductlist()
{
 $productlist = Product_model::all();
 return view('admin.product.product_list',compact('productlist'));
}
public function getProductdelete($id)
{
  $productdelete = Product_model::find($id);
  $productdelete->delete();
  return redirect()->back()->with('Notification','Deleted successfully');
}
public function getProductedit($id)
{
  $productedit = Product_model::find($id);
  return view('admin.product.product_edit',compact('productedit'));
}
public function postProductedit(Request $req, $id)
{
  $productedit = Product_model::find($id);
  $this->validate($req,
    [
     'name' =>'required|min:1|max:255',
     'id_type'=>'required',
     'description' =>'required|min:1|max:255',
     'unit_price'=>'required',
     'promotion_price'=>'required',
     'image'=>'required',
     'gender'=>'required',
     'buy'=>'required',
     'quantity'=>'required',
   ]);
  $productedit->name = $req->name;
  $productedit->id_type = $req ->id_type;
  $productedit->description = $req->description;
  $productedit->unit_price = $req->unit_price;
  $productedit->promotion_price = $req->promotion_price;
  $productedit->image = $req->image;
  $productedit->gender = $req->gender;
  $productedit->buy = $req->buy;
  $productedit->quantity = $req->quantity;
 /* $productedit->status = $req->status;*/
  $productedit->save();
  return redirect()->back()->with('Notification','Edit successfully');
}
public function getProductadd()
 {
   return view('admin.product.product_add');
 }
 public function postProductadd(Request $req)
 {
  $this->validate($req,
    [
      'name' =>'required|min:1|max:255',
     'id_type'=>'required',
     'description' =>'required|min:1|max:255',
     'unit_price'=>'required',
     'promotion_price'=>'required',
     'image'=>'required',
     'gender'=>'required',
     'buy'=>'required',
     'quantity'=>'required',
    ]);
  $productadd = new Product_model;
  $productadd->name = $req->name;
  $productadd->id_type = $req ->id_type;
  $productadd->description = $req->description;
  $productadd->unit_price = $req->unit_price;
  $productadd->promotion_price = $req->promotion_price;
  $productadd->image = $req->image;
  $productadd->gender = $req->gender;
  $productadd->buy = $req->buy;
  $productadd->quantity = $req->quantity;
  $productadd->save();
  return redirect()->back()->with('Notification','Add successfully');
}
}