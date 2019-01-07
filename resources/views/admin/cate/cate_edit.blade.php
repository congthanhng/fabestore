@extends('adminmaster')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>{{$cateedit->name}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('cateedit-page',$cateedit->id)}}" method="POST">
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
                        <label>Category Name</label>
                        <input class="form-control" name="name" placeholder="Please Enter Category Name" value="{{$cateedit->name}}" />
                    </div>
                    <div class="form-group">
                        <label>Category Link</label>
                        <input class="form-control" name="link" placeholder="Please Enter Category Order" value="{{$cateedit->link}}"/>
                    </div>


{{--                     <div class="form-group">
                        <label>Category Status</label>
                        <label class="radio-inline">
                            <input name="status" value="Visible" checked="" type="radio">Visible
                        </label>
                        <label class="radio-inline">
                            <input name="status" value="Invisible" type="radio">Invisible
                        </label>
                    </div> --}}


                    
                    <button type="submit" class="btn btn-default">Category Edit</button>
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