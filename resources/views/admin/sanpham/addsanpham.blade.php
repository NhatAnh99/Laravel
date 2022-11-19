@extends('admin_layout')
@section('admin_content')
 <div id="page-wrapper">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Thêm sản phẩm</h1>
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
                                            <form role="form" action="{{URL::to('/save-sanpham')}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-group" >
                                                    <label>Tên sản phẩm</label>
                                                    <input class="form-control" name="ten_sanpham">
                                                </div>
                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <input type="file" name="hinh_sanpham">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mô tả</label>
                                                    <textarea class="form-control" rows="3" name="mota_sanpham"></textarea>
                                                </div>
                                                      <div class="form-group">
                                                        <label>Giá</label>
                                                        <input class="form-control" name="gia_sanpham">
                                                </div>

                                                    <div class="form-group">
                                                        <label>Số lượng</label>
                                                        <input class="form-control" name="soluong_sanpham">
                                                </div>
                                                <div class="form-group">
                                                    <label>Size</label>
                                                    <select class="form-control" name="size_sanpham">
                                                        <option value="0">S </option>
                                                        <option value="1">M </option>
                                                        <option value="2">L </option>
                                                        <option value="3">XL </option>
                                                        <!-- <option value="4">38 </option>
                                                        <option value="5">39 </option>
                                                        <option value="6">40 </option>
                                                        <option value="7">41</option>
                                                        <option value="8">42</option> -->
                                                        <!-- <option value="9">One Size</option> -->

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Giới tính</label>
                                                    <select class="form-control" name="gioitinh_sanpham">
                                                        <option value="0">Nam </option>
                                                        <option value="1">Nữ </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Trạng thái</label>
                                                    <select class="form-control" name="trangthai_sanpham">
                                                        <option value="0">Ẩn </option>
                                                        <option value="1">Hiện </option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Màu sắc</label>
                                                    <select class="form-control" name="mausac_sanpham">
                                                    <option value="Xanh Dương">Blue</option>
                                                        <option value="Vàng">Yellow</option>
                                                        <option value="Cam">Orange</option>
                                                        <option value="Đen">Black</option>
                                                        <option value="Hồng">Pink</option>
                                                        <option value="Xanh Lá">Green</option>
                                                        <option value="Đỏ">Red</option>
                                                        <option value="Trắng">while</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Loại</label>
                                                    <select class="form-control" name="loai_sanpham">
                                                        @foreach($loai_loaisanpham as $key => $sp_sanpham)
                                                        
                                                        <option value="{{$sp_sanpham->LSP_ID}}">{{$sp_sanpham->LSP_Ten}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Xu hướng</label>
                                                    <select class="form-control" name="xh_sanpham">
                                                        @foreach($xh_xuhuong as $key => $sp_sanpham)
                                                        
                                                        <option value="{{$sp_sanpham->XH_ID}}">{{$sp_sanpham->XH_Ten}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phong cách</label>
                                                    <select class="form-control" name="pc_sanpham">
                                                        @foreach($pc_phongcach as $key => $sp_sanpham)
                                                        
                                                        <option value="{{$sp_sanpham->PC_ID}}">{{$sp_sanpham->PC_Ten}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button type="submit" name="add_sanpham" class="btn btn-space btn-primary">Thêm sản phẩm</button>
                                                <button type="reset" class="btn btn-space btn-secondary">Hủy thêm sản phẩm</button>
                                            </form>
                                        </div>
@endsection