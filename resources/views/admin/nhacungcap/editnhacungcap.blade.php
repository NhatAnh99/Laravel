@extends('admin_layout')
@section('admin_content')
 <div id="page-wrapper">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Cập nhật nhà cung cấp</h1>
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
                                             @foreach($edit_nhacungcap as $key =>$ncc_nhacungcap)
                                            <form role="form" action="{{URL::to('/update-nhacungcap/'.$ncc_nhacungcap->NCC_ID)}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Tên nhà cung cấp</label>
                                                    <input class="form-control" name="ten_nhacungcap" value="{{$ncc_nhacungcap->NCC_ID}}">
                                                </div>
                                                 <div class="form-group">
                                                    <label>Số điện thoại</label>
                                                    <input class="form-control" name="sdt_nhacungcap" value="{{$ncc_nhacungcap->NCC_SDT}}">
                                                </div>
                                                  <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" name="email_nhacungcap" value="{{$ncc_nhacungcap->NCC_Email}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <input type="file" name="hinh_nhacungcap">
                                                    <img src="{{URL::to('public/upload/sanpham/'.$ncc_nhacungcap->NCC_Hinh)}}" height="100" width="100">
                                                </div>
                                                <button type="submit" name="add_nhacungcap" class="btn btn-space btn-primary">Cập nhật nhà cung cấp</button>
                                            </form>
                                            @endforeach
                                        </div>
@endsection