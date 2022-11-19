@extends('admin_layout')
@section('admin_content')
 <div id="page-wrapper">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Cập nhật xu hướng</h1>
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
                                            @foreach($edit_xuhuong as $key => $edit_value)
                                            <form role="form" action="{{URL::to('/update-xuhuong/'.$edit_value->XH_ID)}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Tên xu hướng</label>
                                                    <input class="form-control" name="ten_xuhuong" value="{{$edit_value->XH_Ten}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <input type="file" name="hinh_xuhuong">
                                                    <img src="{{URL::to('public/upload/sanpham/'.$edit_value->XH_Hinh)}}" height="100" width="100">
                                                </div>
                                                <div class="form-group">
                                                    <label>Năm xu hướng</label>
                                                    <input class="form-control" type="date" name="nam_xuhuong" value="{{$edit_value->XH_Nam}}">
                                                </div>
                                                <button type="submit" name="xuhuong_edit" class="btn btn-space btn-primary">Cập nhật xu hướng</button>
                                            </form>
                                            @endforeach
                                        </div>
@endsection