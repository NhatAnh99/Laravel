@extends('admin_layout')
@section('admin_content')
 <div id="page-wrapper">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Cập nhật loại sản phẩm</h1>
                            <?php
                            $message = Session::get('message');
                            if($message){
                              echo '<span class="text-alert">',$message,'</span>';
                              Session::put('message',null);
                             }
                              ?>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            @foreach($edit_loaisanpham as $key => $edit_value)
                                            <form role="form" action="{{URL::to('/update-loaisanpham/'.$edit_value->LSP_ID)}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Tên loại sản phẩm</label>
                                                    <input class="form-control" name="ten_loai" value="{{$edit_value->LSP_Ten}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <input type="file" name="hinh_loai">
                                                    <img src="{{URL::to('public/upload/sanpham/'.$edit_value->LSP_Hinh)}}" height="100" width="100">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mô tả</label>
                                                    <textarea class="form-control" rows="3" name="mota_loai">{{$edit_value->LSP_MoTa}}</textarea>
                                                </div>
                                                <button type="submit" name="admin_editloaisanpham" class="btn btn-space btn-primary">Cập nhật loại sản phẩm</button>
                                            </form>
                                            @endforeach
                                        </div>
@endsection