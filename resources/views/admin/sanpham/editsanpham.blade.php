@extends('admin_layout')
@section('admin_content')
 <div id="page-wrapper">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Cập nhật sản phẩm</h1>
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
                                            @foreach($edit_sanpham as $key =>$sp_sanpham)
                                            <form role="form" action="{{URL::to('/update-sanpham/'.$sp_sanpham->SP_ID)}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-group" >
                                                    <label>Tên sản phẩm</label>
                                                    <input class="form-control" name="ten_sanpham" value="{{$sp_sanpham->SP_Ten}}">
                                                </div>

                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <input type="file" name="hinh_sanpham">
                                                    <img src="{{URL::to('public/upload/sanpham/'.$sp_sanpham->SP_Hinh)}}" height="100" width="100">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mô tả</label>
                                                    <textarea class="form-control" rows="3" name="mota_sanpham">{{$sp_sanpham->SP_MoTa}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Chọn size</label>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="size_sanpham" value="1" checked> Size S
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="size_sanpham" value="2"> Size M
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="size_sanpham" value="3"> Size L
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="size_sanpham" value="3"> Size XL
                                                        </label>
                                                    </div>
                                                    <!-- <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="size_sanpham" value="4"> Size 38
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="size_sanpham" value="5"> Size 39
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="size_sanpham" value="6"> Size 40
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="size_sanpham" value="7"> Size 41
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="size_sanpham" value="8"> Size 42
                                                        </label>
                                                    </div> -->
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="size_sanpham" value="9"> One Size
                                                        </label>
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label>Giới tính</label>
                                                        <select class="form-control" name="gioitinh_sanpham">
                                                            <option value="0">Nam </option>
                                                            <option value="1">Nữ </option>
                                                        </select>
                                                    </div>
                                                      <div class="form-group">
                                                        <label>Giá</label>
                                                        <input class="form-control" name="gia_sanpham" value="{{$sp_sanpham->SP_Gia}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Số lượng</label>
                                                        <input class="form-control" name="soluong_sanpham" value="{{$sp_sanpham->SP_SoLuong}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Màu sắc</label>
                                                    <select class="form-control" name="mausac_sanpham">
                                                        <option value="0">Blue</option>
                                                        <option value="1">Yellow</option>
                                                        <option value="2">Orange</option>
                                                        <option value="3">Black</option>
                                                        <option value="4">Pink</option>
                                                        <option value="5">Green</option>
                                                        <option value="6">Red</option>
                                                        <option value="7">while</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Loại</label>
                                                    <select class="form-control" name="loai_sanpham">
                                                        @foreach($loai_loaisanpham as $key => $loai_loaisanpham)
                                                        @if($loai_loaisanpham->LSP_ID == $sp_sanpham->LSP_ID)
                                                        <option selected value="{{$sp_sanpham->LSP_ID}}">{{$loai_loaisanpham->LSP_Ten}}</option>
                                                        @else
                                                        <option value="{{$sp_sanpham->LSP_ID}}">{{$loai_loaisanpham->LSP_Ten}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Xu hướng</label>
                                                    <select class="form-control" name="xh_sanpham">
                                                        @foreach($xh_xuhuong as $key => $xh_xuhuong)
                                                        @if($xh_xuhuong->XH_ID == $sp_sanpham->SP_ID)
                                                        <option selected value="{{$sp_sanpham->XH_ID}}">{{$xh_xuhuong->XH_Ten}}</option>
                                                        @else
                                                        <option value="{{$sp_sanpham->XH_ID}}">{{$xh_xuhuong->XH_Ten}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phong cách</label>
                                                    <select class="form-control" name="pc_sanpham">
                                                        @foreach($pc_phongcach as $key => $pc_phongcach)
                                                        @if($pc_phongcach->PC_ID == $sp_sanpham->SP_ID)
                                                        <option selected value="{{$sp_sanpham->PC_ID}}">{{$pc_phongcach->PC_Ten}}</option>
                                                        @else
                                                        <option value="{{$sp_sanpham->PC_ID}}">{{$pc_phongcach->PC_Ten}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button type="submit" name="add_sanpham" class="btn btn-space btn-primary">Cập nhật sản phẩm</button>
                                                <button type="reset" class="btn btn-space btn-secondary">Hủy thêm sản phẩm</button>
                                            </form>
                                            @endforeach
                                        </div>
@endsection