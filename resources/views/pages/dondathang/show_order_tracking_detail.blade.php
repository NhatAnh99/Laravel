@extends('welcome')
@section('content')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.html">Trang Chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Chi Tiết Đơn Hàng</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->
<!--Checkout page section-->
<div class="Checkout_section">
    <div class="row">
    <div class="checkout_form">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="order_table table-responsive mb-30">
                        <div class="payment_method">
                            <div class="order_button">
                                <?php
                                $khachhang_id = Session::get('KH_ID');
                                if($khachhang_id!=null){
                                ?>
                                    <a type="button" class="btn btn-warning" href="{{ URL::to('/order-tracking')}}">Quay Lại</a>
                                <?php
                                }else{
                                ?>
                                    <a type="button" class="btn btn-warning" href="{{ URL::to('/show-order-tracking')}}">Quay Lại</a>
                                <?php
                                }
                                ?>
                                <a type="button" class="btn btn-success" href="{{ URL::to('/shop-sanpham')}}" >Mua Hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-12 col-md-12">
                        <h3>Thông tin đơn hàng</h3>
                        <div class="order_table table-responsive mb-30">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày đặt hàng</th>
                                        <th>Tình trạng thanh toán</th>
                                        <th>Trạng thái</th>
                                        <th>Tình trạng giao</th>
                                        <th>Tổng</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $total=$customer_order->DDH_TongTien;
                                    @endphp
                                    <tr>
                                        <td>{{ $customer_order->DDH_MaDon }}</td>
                                        <td>{{ date('d-m-Y', strtotime($customer_order->DDH_NgayDat)) }}</td>
                                        <td>
                                            @if($customer_order->DDH_TinhTrangThanhToan==0)
                                            Chưa thanh toán
                                            @elseif ($customer_order->DDH_TinhTrangThanhToan==1)
                                            Đã thanh toán
                                            @elseif ($customer_order->DDH_TinhTrangThanhToan==2)
                                            Đơn hàng đã bị hủy - đã thanh toán
                                            @elseif ($customer_order->DDH_TinhTrangThanhToan==3)
                                            Đơn hàng đã bị hủy
                                            @endif
                                        </td>
                                        <td>
                                            @if($customer_order->DDH_TrangThai==0)
                                            Chưa xử lý
                                            @elseif($customer_order->DDH_TrangThai==1)
                                            Đã xử lý
                                            @elseif($customer_order->DDH_TrangThai==2)
                                            Đang xử lý
                                            @elseif($customer_order->DDH_TrangThai==3)
                                            Hoàn tất đơn hàng
                                            @elseif($customer_order->DDH_TrangThai==4)
                                            Hủy đơn hàng
                                            @endif
                                        </td>
                                         <td>
                                            @if($customer_order->DDH_TinhTrangGiao==0)
                                           Chưa giao hàng
                                            @elseif ($customer_order->DDH_TinhTrangGiao==1)
                                           Đang giao hàng
                                            @elseif ($customer_order->DDH_TinhTrangGiao==2)
                                            Đã giao hàng
                                            @endif
                                        </td>
                                        <td>{{number_format($total,0,',','.').' VNĐ' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <h3>Thông tin giao hàng</h3>
                        <div class="order_table table-responsive mb-30">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Người nhận</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Ghi chú</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $customer_delivery->GH_Ten}}</td>
                                        <td >{{ $customer_delivery->GH_Email }} </td>
                                        <td>{{$customer_delivery->GH_SDT }}</td>
                                        <td>{{ $customer_delivery->GH_DiaChi }}</td>
                                       
                                        <td>
                                            {{ $customer_delivery->GH_GhiChu }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!--Checkout page section end-->
@endsection
