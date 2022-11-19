@extends('admin_layout')
@section('admin_content')
 <div id="page-wrapper">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Thêm xu hướng</h1>
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
                                            <form role="form" action="{{URL::to('/save-xuhuong')}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Tên xu hướng</label>
                                                    <input class="form-control" name="ten_xuhuong">
                                                </div>
                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <input type="file" name="hinh_xuhuong">
                                                </div>
                                                 <div class="form-group">
                                                    <label>Trạng thái</label>
                                                    <select class="form-control" name="trangthai_xuhuong">
                                                        <option value="0">Ẩn </option>
                                                        <option value="1">Hiện </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Năm</label>
                                                    <input type="date" class="form-control" name="nam_xuhuong">
                                                </div>
                                                <button type="submit" name="xuhuong_add" class="btn btn-space btn-primary">Thêm xu hướng</button>
                                            </form>
                                        </div>
@endsection