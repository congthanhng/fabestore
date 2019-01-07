@extends('adminmaster')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Product Type</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Promotion Price</th>
                    <th>Image</th>
                    <th>Gender</th>
                    <th>Sell</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productlist as $pro)
                <tr class="odd gradeX" align="center">
                    <td>{{$pro->id}}</td>
                    <td>{{$pro->name}}</td>
                    <td>
                        {{$pro->id_type}} 
                    </td>
                    <td>{{$pro->description}}</td>
                    <td>{{$pro->unit_price}}</td>
                    <td>{{$pro->promotion_price}}</td>
                    <td>{{$pro->image}}</td>
                    <td>{{$pro->gender}}</td>
                    <td>{{$pro->buy}}</td>
                    <td>{{$pro->quantity}}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('productdelete-page',$pro->id)}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('productedit-page',$pro->id)}}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection