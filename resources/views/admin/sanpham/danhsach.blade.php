
@extends('admin.layout.index')
@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Đường dẫn</th>
                                <th>Description</th>
                                 <th>Giá</th>
                                 <th>Giá sale</th>
                                
                                 <th>Thể Loại</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
            @foreach($sanpham as $sp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$sp->id}}</td>
                                <td><p>{{$sp->name}}</p>
                                    <img height="100px" src="source/images/product/{{$sp->image}}" alt="">
                                </td>
                                <td>{{$sp->url_product}}</td>
                                <td>{{$sp->description}}</td>
                                <td>{{$sp->unit_price}}</td>
                                <td>{{$sp->promotion_price}}</td>
                                
                             <td>{{$sp->product_type->name}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/{{$sp->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/{{$sp->id}}">Sửa</a></td>
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