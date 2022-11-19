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
                    <li>Đơn Hàng</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->
<!-- Start Maincontent  -->
<section class="main_content_area">
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div>
                            <h3>Đơn Hàng</h3>
                            <div class="coron_table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Đơn hàng</th>
                                            <th>Ngày đặt hàng</th>
                                            <th>Trạng thái</th>
                                            <th>Tổng cộng</th>
                                            <th>Chi tiết</th>
                                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            @foreach ($get_order as $key=>$order)
                                                <tr>
                                                    <td>{{ $order->DDH_MaDon }}</td>
                                                    <td>{{ date('d-m-Y', strtotime($order->DDH_NgayDat)) }}</td>
                                                    <td>
                                                        <span class="success">
                                                            @if($order->DDH_TrangThai==0)
                                                            Chưa xác nhận
                                                            @elseif($order->DDH_TrangThai==1)
                                                            Đã xác nhận
                                                            @elseif($order->DDH_TrangThai==2)
                                                            Đang vận chuyển
                                                            @elseif($order->DDH_TrangThai==3)
                                                            Đã giao hàng
                                                            @else
                                                            Đơn Hàng đã bị hủy
                                                            @endif
                                                        </span>
                                                    </td>
                                                    <td>{{number_format($order->DDH_TongTien  ,0,',','.').' VNĐ' }}</td>
                                                    <td><a href="{{URL::to('/show-order-tracking-detail/'.$order->DDH_ID)}}" class="view">Chi tiết</a></td>
                                                  
                                                  
                                                    
                                                </tr>
                                            @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>