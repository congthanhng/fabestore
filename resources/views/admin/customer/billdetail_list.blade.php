@extends('adminmaster')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bill Detail
                    <small></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              @csrf
            <thead>
                <tr align="center">
                    <th style="text-align: center;">ID Product</th>
                    <th style="text-align: center;">Quantity</th>
                    <th style="text-align: center;">Price</th>
                    {{-- <th>Status</th> --}}
                    <th style="text-align: center;">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartdetail as $cad)
                <tr class="odd gradeX" align="center">
                    <td>{{$cad->id_product}}</td>
                    <td>{{$cad->quantity}}</td>
                    <td>{{$cad->unit_price}}</td>
                    {{-- <td>{{$list->status}}</td> --}}
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('cartdetaildelete-page',$cad->id)}}">Delete</a></td>
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