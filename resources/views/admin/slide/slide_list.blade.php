@extends('adminmaster')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
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
                <tr>
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Description</th>
                    <th style="text-align: center;">Link</th>
                    <th style="text-align: center;">Image</th>
                    {{-- <th>Status</th> --}}
                    <th style="text-align: center;">Delete</th>
                    <th style="text-align: center;">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($slidelist as $slide)
                <tr class="even gradeC" align="center">
                    <td>{{$slide->id}}</td>
                    <td>{{$slide->name}}</td>
                    <td>{{$slide->description}}</td>
                    <td>{{$slide->link}}</td>
                    <td>{{$slide->image}}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('slidedelete-page',$slide->id)}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('slideedit-page',$slide->id)}}">Edit</a></td>
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