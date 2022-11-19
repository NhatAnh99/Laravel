@extends('admin_layout')
@section('admin_content')
 <div id="page-wrapper">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Thêm mã giảm giá</h1>
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
                                            <form role="form" action="{{URL::to('/insert-coupon-code')}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <!-- <div class="form-group">
                                                    <label>Mã Giảm</label>
                                                    <input class="form-control" name="id_coupon">
                                                </div> -->
                                                <div class="form-group" >
                                                    <label>Tiêu đề</label>
                                                    <input class="form-control" name="tieude_coupon">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nội dung</label>
                                                    <textarea class="form-control" rows="3" name="noidung_coupon"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phương thức</label>
                                                    <select class="form-control" name="phuongthuc_coupon">
                                                        <option value="0">Chọn giá trị</option>
                                                        <option value="1">Giảm theo % </option>
                                                        <option value="2">Giảm theo tiền </option>
                                                        <option value="3">Quà tặng </option>
                                                    </select>
                                                </div>
                                                <div class="form-group" >
                                                    <label>Giá trị</label>
                                                    <input class="form-control" name="giatri_coupon">
                                                </div>
                                                <div class="form-group">
                                                    <label>Ngày khuyến mãi</label>
                                                    <input type="date" class="form-control" name="ngay_coupon">
                                                </div>
                                                <div class="form-group" >
                                                    <label>Số ngày khuyến mãi</label>
                                                    <input class="form-control" name="songay_coupon">
                                                </div>
                                                <button type="submit" name="add_coupon" class="btn btn-space btn-primary">Thêm mã giảm giá</button>
                                            </form>
                                        </div>
@endsection