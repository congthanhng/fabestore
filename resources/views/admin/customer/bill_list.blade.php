@extends('adminmaster')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bill
                    <small></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              @csrf
            <thead>
                <tr align="center">
                    <th style="text-align: center;">ID Customer</th>
                    <th style="text-align: center;">Date order</th>
                    <th style="text-align: center;">Total Price</th>
                    {{-- <th>Status</th> --}}
                    <th style="text-align: center;">Delete</th>
                    <th style="text-align: center;">Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $ca)
                <tr class="odd gradeX" align="center">
                    <td>{{$ca->id_customer}}</td>
                    <td>{{$ca->date_order}}</td>
                    <td>{{$ca->total}}</td>
                    {{-- <td>{{$list->status}}</td> --}}
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('cartdelete-page',$ca->id)}}">Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('cartdetail-page')}}">Detail</a></td>
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