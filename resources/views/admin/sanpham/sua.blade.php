@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Sản Phẩm
                                                
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

                        <form action="admin/sanpham/them" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                       
                
                            <div class="form-group">
                                <label>Chọn Loại Sản Phẩm</label>
                                <select class="form-control" name="chon">
                                <option value="">Chọn Thể Loại</option>
                                        @foreach($loaisp as $loai)
                                    <option value="{{$loai->id}}">{{$loai->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input class="form-control" name="Ten" placeholder="điền tên sp" />
                            </div>
                            <div class="form-group">
                                <label>Đường dẫn</label>
                                <input class="form-control" name="TenK" placeholder="dien-duong-dan" />
                            </div>
                            
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="MoTa" id="demo" class="form-control ckeditor" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá Tiền</label>
                                <input class="form-control" name="Gia"/>
                            </div>
                            <div class="form-group">
                                <label>Giá sale</label>
                                <input class="form-control" name="GiaSale" placeholder="Nếu sp ko khuyến mãi thì nhập số 0" />
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="image">
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection