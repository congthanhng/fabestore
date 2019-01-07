<?php
Route::group(['prefix'=>'home'],function(){
	Route::get('/',['as'=>'index-page',
		'uses'=>'Page_controller@getIndex'
	]);
	Route::get('best-seller',['as'=>'bestseller-page',
		'uses'=>'Page_controller@getBestseller'
	]);
	Route::get('sale-product',['as'=>'saleproduct-page',
		'uses'=>'Page_controller@getSale'
	]);
	Route::get('type-product/{type}',[
		'as'=>'typeproduct-page',
		'uses'=>'Page_controller@getTypeproduct'
	]);
	Route::get('product-detail/{id}',[
		'as'=>'productdetail-page',
		'uses'=>'Page_controller@getProductdetail'
	]);
	Route::get('product-quick/{id}',[
		'as'=>'productquick-page',
		'uses'=>'Page_controller@getProductquick'
	]);
	Route::get('home/contact',[
		'as'=>'contact-page',
		'uses'=>'Page_controller@getContact'
	]);
	Route::post('home/contact',[
		'as'=>'contact-page',
		'uses'=>'Page_controller@postContact'
	]);
	Route::post('footer',[
		'as'=>'footer-page',
		'uses'=>'Page_controller@postFooter'
	]);
	Route::get('add-to-cart/{id}',[
		'as'=>'addcart-page',
		'uses'=>'Page_controller@getAddtocart'
	]);
	Route::get('del-cart/{id}',[
		'as'=>'delcart-page',
		'uses'=>'Page_controller@getDelcart'
	]);
	Route::get('cart/checkout',[
		'as'=>'checkout-page',
		'uses'=>'Page_controller@getCheckout'
	]);
	Route::post('cart/checkout',[
		'as'=>'checkout-page',
		'uses'=>'Page_controller@postCheckout'
	]);
	Route::get('login',[
		'as'=>'login-page',
		'uses'=>'Page_controller@getLogin'
	]);
	Route::post('login',[
		'as'=>'login-page',
		'uses'=>'Page_controller@postLogin'
	]);
	Route::get('res',[
		'as'=>'res-page',
		'uses'=>'Page_controller@getRes'
	]);
	Route::post('res',[
		'as'=>'res-page',
		'uses'=>'Page_controller@postRes'
	]);
	Route::get('search',[
		'as'=>'search-page',
		'uses'=>'Page_controller@getSearch'
	]);
	Route::get('blog',[
		'as'=>'blog-page',
		'uses'=>'Page_controller@getBlog'
	]);
	Route::get('about',[
		'as'=>'about-page',
		'uses'=>'Page_controller@getAbout'
	]);
	Route::get('logout',[
		'as'=>'logout-page',
		'uses'=>'Page_controller@postLogout'
	]);
	Route::get('quickview/{id}',[
		'as'=>'quickview-page',
		'uses'=>'Page_controller@getQuickview'
	]);
	Route::get('admin/cate_add', function() {
		return view('admin.cate.cate_add');
	});
});



Route::group(['prefix'=>'admin'],function(){
	/*  Cate  */
	Route::group(['prefix'=>'cate'],function(){
		// admin/cate/list
		Route::get('list',[
			'as'=>'catelist-page',
			'uses'=>'Admin_controller@getCatelist'
		]);
		// admin/cate/add
		Route::get('add',[
			'as'=>'cateadd-page',
			'uses'=>'Admin_controller@getCateadd'
		]);
		Route::post('add',[
			'as'=>'cateadd-page',
			'uses'=>'Admin_controller@postCateadd'
		]);
		// admin/cate/delete
		Route::get('delete/{id}',[
			'as'=>'catedelete-page',
			'uses'=>'Admin_controller@getCatedelete'
		]);
		// admin/cate/edit
		Route::get('edit/{id}',[
			'as'=>'cateedit-page',
			'uses'=>'Admin_controller@getCateedit'
		]);
		Route::post('edit/{id}',[
			'as'=>'cateedit-page',
			'uses'=>'Admin_controller@postCateedit'
		]);
	});
	/*  product  */
	Route::group(['prefix'=>'product'],function(){
		// admin/product/list
		Route::get('list',[
			'as'=>'productlist-page',
			'uses'=>'Admin_controller@getProductlist'
		]);
		// admin/product/add
		Route::get('add',[
			'as'=>'productadd-page',
			'uses'=>'Admin_controller@getProductadd'
		]);
		Route::post('add',[
			'as'=>'productadd-page',
			'uses'=>'Admin_controller@postProductadd'
		]);
		// admin/product/edit
		Route::get('edit/{id}',[
			'as'=>'productedit-page',
			'uses'=>'Admin_controller@getProductedit'
		]);
		Route::post('edit/{id}',[
			'as'=>'productedit-page',
			'uses'=>'Admin_controller@postProductedit'
		]);
		Route::get('delete/{id}',[
			'as'=>'productdelete-page',
			'uses'=>'Admin_controller@getProductdelete'
		]);
	});
	/*  slide  */
	Route::group(['prefix'=>'slide'],function(){
		// admin/slide/list
		Route::get('list',[
			'as'=>'slidelist-page',
			'uses'=>'Admin_controller@getSlidelist'
		]);
		// admin/slide/add
		Route::get('add',[
			'as'=>'slideadd-page',
			'uses'=>'Admin_controller@getSlideadd'
		]);
		Route::post('add',[
			'as'=>'slideadd-page',
			'uses'=>'Admin_controller@postSlideadd'
		]);
		// admin/slide/delete
		Route::get('delete/{id}',[
			'as'=>'slidedelete-page',
			'uses'=>'Admin_controller@getSlidedelete'
		]);
		// admin/slide/edit
		Route::get('edit/{id}',[
			'as'=>'slideedit-page',
			'uses'=>'Admin_controller@getSlideedit'
		]);
		Route::post('edit/{id}',[
			'as'=>'slideedit-page',
			'uses'=>'Admin_controller@postSlideedit'
		]);
	});
	/*  user  */
	Route::group(['prefix'=>'customer'],function(){
		// admin/user/list
		Route::get('list',[
			'as'=>'userlist-page',
			'uses'=>'User_controller@getUserlist'
		]);
		Route::get('cart',[
			'as'=>'cart-page',
			'uses'=>'User_controller@getCart'
		]);
		Route::get('cartdetail',[
			'as'=>'cartdetail-page',
			'uses'=>'User_controller@getCartdetail'
		]);
		// admin/slide/delete
		Route::get('delete/{id}',[
			'as'=>'userdelete-page',
			'uses'=>'User_controller@getUserdelete'
		]);
		Route::get('cart/{id}',[
			'as'=>'cartdelete-page',
			'uses'=>'User_controller@getCartdelete'
		]);
		Route::get('billdelete/{id}',[
			'as'=>'cartdetaildelete-page',
			'uses'=>'User_controller@getCartdetaildelete'
		]);
	});
});