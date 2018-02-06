   
@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Danh mục {{$loaisp->name}}
                            </h1>
                        </div>
                        <!-- /.col-lg-12 -->
                        <div class="col-lg-7" style="padding-bottom:120px">

                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                  @foreach($errors->all() as $err)
                                    {{$err}} <br>
                                  @endforeach  
                                </div>
                            @endif


                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        
                            <form action="admin/loaisanpham/sua/{{$loaisp->id}}" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="form-group">
                                    <label>Tên Loại SP cần sửa</label>
                                    <input class="form-control" name="Ten" placeholder="Điền tên Loại Sp"  value="{{$loaisp->name}}" />
                                </div>
                                <div class="form-group">
                                    <label>Tên đường dẫn Loại SP cần sửa</label>
                                    <input class="form-control" name="TenK" placeholder="loai-san-pham-khong-dau" value="{{$loaisp->url_name}}"/>
                                </div>
                               
                                <button type="submit" class="btn btn-default">Sửa</button>
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