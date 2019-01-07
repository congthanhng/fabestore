 @extends('adminmaster')
 @section('content')
 <!-- Page Content -->
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Customer
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
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Note</th>
                    <th>Delete</th>
                    <th>Cart</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $user as $us)
                <tr class="odd gradeX" align="center">
                    <td>{{$us->id}}</td>
                    <td>{{$us->name}}</td>
                    <td>{{$us->email}}</td>
                    <td>{{$us->address}}</td>
                    <td>{{$us->phone_number}}</td>
                    <td>{{$us->note}}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('userdelete-page',$us->id)}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('cart-page')}}">Detail</a></td>
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