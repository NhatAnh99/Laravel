@extends('admin_layout')
@section('admin_content')
 <div id="page-wrapper">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Lưu đơn hàng</h1>
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
                                            @foreach($edit_dondathang as $key => $ddh_dondatahng)
                                            <form role="form" action="{{URL::to('/update-dondathang/'.$ddh_dondatahng->DDH_ID)}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                 
                                                <div class="form-group">
                                                    <label>Tình trạng giao</label>
                                                    <select class="form-control" name="tinhtranggiao_dondathang" >
                                                        @if($ddh_dondatahng->DDH_TinhTrangGiao==0)
                                                        <option selected value="0">Chưa giao hàng</option>
                                                        <option value="1">Đang giao hàng</option>
                                                        <option value="2">Đã giao hàng</option>
                                                        @elseif($ddh_dondatahng->DDH_TinhTrangGiao==1)
                                                        <option value="0">Chưa giao hàng</option>
                                                        <option selected value="1">Đang giao hàng</option>
                                                        <option value="2">Đã giao hàng</option>
                                                        @else
                                                        <option value="0">Chưa giao hàng</option>
                                                        <option value="1">Đang giao hàng</option>
                                                        <option selected value="2">Đã giao hàng</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Trạng thái thanh toán</label>
                                                    <select class="form-control" name="tinhtrangthanhtoan_dondathang">
                                                        @if($ddh_dondatahng->DDH_TinhTrangThanhToan==0)
                                                        <option selected value="0">Chưa thanh toán </option>
                                                        <option value="1">Đã thanh toán </option>
                                                        @else
                                                        <option value="0">Chưa thanh toán </option>
                                                        <option selected  value="1">Đã thanh toán </option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Trạng thái</label>
                                                    <select class="form-control" name="trangthai_dondathang">
                                                        @if($ddh_dondatahng->DDH_TrangThai==0)
                                                        <option selected value="0">Chưa xử lý</option>
                                                        <option value="1">Đã xử lý </option>
                                                        <option value="2">Đang xử lý</option>
                                                        <option value="3">Hoàn tất đơn hàng</option>
                                                        <option value="4">Hủy đơn hàng</option>
                                                        @elseif($ddh_dondatahng->DDH_TrangThai==1)
                                                        <option value="0">Chưa xử lý</option>
                                                        <option selected value="1">Đã xử lý </option>
                                                        <option value="2">Đang xử lý</option>
                                                        <option value="3">Hoàn tất đơn hàng</option>
                                                        <option value="4">Hủy đơn hàng</option>
                                                        @elseif($ddh_dondatahng->DDH_TrangThai==2)
                                                        <option value="0">Chưa xử lý</option>
                                                        <option value="1">Đã xử lý </option>
                                                        <option selected value="2">Đang xử lý</option>
                                                        <option value="3">Hoàn tất đơn hàng</option>
                                                        <option value="4">Hủy đơn hàng</option>
                                                        @elseif($ddh_dondatahng->DDH_TrangThai==3)
                                                        <option value="0">Chưa xử lý</option>
                                                        <option value="1">Đã xử lý </option>
                                                        <option value="2">Đang xử lý</option>
                                                        <option selected value="3">Hoàn tất đơn hàng</option>
                                                        <option value="4">Hủy đơn hàng</option>
                                                        @else
                                                        <option value="0">Chưa xử lý</option>
                                                        <option value="1">Đã xử lý </option>
                                                        <option value="2">Đang xử lý</option>
                                                        <option value="3">Hoàn tất đơn hàng</option>
                                                        <option selected value="4">Hủy đơn hàng</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <button type="submit" name="add_dondathang" class="btn btn-space btn-primary">Lưu đơn đặt hàng</button>
                                            </form>
                                           @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection