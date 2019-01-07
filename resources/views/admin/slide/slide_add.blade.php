@extends('adminmaster')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('slideadd-page')}}" method="POST">
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
                        <label>Slide Name</label>
                        <input class="form-control" name="name" placeholder="Please Enter Slide Title" required="" />
                    </div>
                    <div class="form-group">
                        <label>Slide Description</label>
                        <input class="form-control" name="description" placeholder="Please Enter Slide Description" required="" />
                    </div>
                    <div class="form-group">
                        <label>Slide Link</label>
                        <input class="form-control" name="link" placeholder="Please Enter Slide Link" required="" />
                    </div>
                    <div class="form-group">
                        <label>Slide Image</label>
                        <input class="form-control" name="image" placeholder="Please Enter Slide Image" required="" />
                    </div>
                    <button type="submit" class="btn btn-default">Slide Add</button>
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