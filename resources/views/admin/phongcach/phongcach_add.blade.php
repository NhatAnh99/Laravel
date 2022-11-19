@extends('admin_layout')
@section('admin_content')
 <div id="page-wrapper">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Thêm phong cách</h1>
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
                                            <form role="form" action="{{URL::to('/save-phongcach')}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Tên phong cách</label>
                                                    <input class="form-control" name="ten_phongcach">
                                                </div>
                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <input type="file" name="hinh_phongcach">
                                                </div>
                                                <button type="submit" name="phongcach_add" class="btn btn-space btn-primary">Thêm phong cách</button>
                                            </form>
                                        </div>
@endsection