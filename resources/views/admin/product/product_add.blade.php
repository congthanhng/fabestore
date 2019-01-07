@extends('adminmaster')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>ADD</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('productadd-page')}}" method="POST">
                 @csrf
                 @if(Session::has('Notification'))
                 <div  class="alert alert-success">
                    {{Session::get('Notification')}}    
                </div>
                @endif
                @if(count($errors)>0)
                <div style="color: red;" class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}}
                    <br>
                    @endforeach
                </div>
                @endif
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name" placeholder="Please Enter Name"/>
                </div>
                <div class="form-group">
                    <label>Product Type: <br> 1 - JACKETS, 2 - DRESSES, 3 - T-SHIRTS <br> 4 - 
TROUSERS, 5 - JEANS, 6 - SKIRTS <br> 7 - SHOES, 8 - ACCESSORIES, 9 - SHIRTS</label>
                    <input class="form-control" name="id_type" placeholder="Please Enter number"/>
                </div>
                <div class="form-group">
                    <label>Product Description</label>
                    <textarea class="form-control" rows="3" name = "description"></textarea>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input class="form-control" name="unit_price"/>
                </div>
                <div class="form-group">
                    <label>Sale Price</label>
                    <input class="form-control" name="promotion_price" value="0" />
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input class="form-control" name="image" />
                </div>
                <div class="form-group">
                    <label>Product Gender:     </label>
                    <label class="radio-inline">
                        <input name="gender" value="Women" checked="" type="radio">Women
                    </label>
                    <label class="radio-inline">
                        <input name="gender" value="Men" type="radio">Men
                    </label>
                </div>
                <div class="form-group">
                    <label>Selled</label>
                    <input class="form-control" name="buy" value="0" />
                </div>
                <div class="form-group">
                    <label>Product Quantity</label>
                    <input class="form-control" name="quantity"/>
                </div>
                {{-- <div class="form-group">
                    <label>Product Status</label>
                    <label class="radio-inline">
                        <input name="rdoStatus" value="1" checked="" type="radio">Visible
                    </label>
                    <label class="radio-inline">
                        <input name="rdoStatus" value="2" type="radio">Invisible
                    </label>
                </div> --}}
                <button type="submit" class="btn btn-default">Product Edit</button>
                <button type="reset" class="btn btn-default">Reset</button>
                <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    @endsection