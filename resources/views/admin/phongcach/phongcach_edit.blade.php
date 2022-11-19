@extends('admin_layout')
@section('admin_content')
 <div id="page-wrapper">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Cập nhật phong cách</h1>
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
                                            @foreach($edit_phongcach as $key => $edit_value)
                                            <form role="form" action="{{URL::to('/update-phongcach/'.$edit_value->PC_ID)}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Tên loại phong cách</label>
                                                    <input class="form-control" name="ten_phongcach" value="{{$edit_value->PC_Ten}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <input type="file" name="hinh_phongcach">
                                                    <img src="{{URL::to('public/upload/sanpham/'.$edit_value->PC_Hinh)}}" height="100" width="100">
                                                </div>
                                                <button type="submit" name="phongcach_edit" class="btn btn-space btn-primary">Cập nhật phong cách</button>
                                            </form>
                                            @endforeach
                                        </div>
@endsection