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
                        <li>Theo Dõi Đơn Hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    <!-- customer login start -->
    <div class="customer_login">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {!! session()->get('message') !!}
                {!! session()->forget('message') !!}
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger">
                {!! session()->get('error') !!}
                {!! session()->forget('error') !!}
            </div>
        @endif
        <div class="row">
            <!--blog area start-->
            <div class="main_blog_area">
                <div class="row">
                    <div class="blog_details_left">
                        <div class="blog_gallery">
                            <?php
                            $khachhang_id = Session::get('KH_ID');
                            $khachhang_email = Session::get('KH_Email');
                            if($khachhang_id!=null){
                            ?>
                                @if($get_order)
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
                                                        <th>Thao tác</th>
                                                       
                                                        
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
                                                                        Đã bị hủy
                                                                        @endif
                                                                    </span>
                                                                </td>
                                                                <td>{{number_format($order->DDH_TongTien  ,0,',','.').' VNĐ' }}</td>
                                                                <td><a href="{{URL::to('/show-order-tracking-detail/'.$order->DDH_ID)}}" class="view">Chi tiết</a></td>
                                                              
                                                                @if($order->DDH_TrangThai==0|| $order->DDH_TrangThai==1)
                                                                <form role="form" action="{{URL::to('/del-dondathang/'.$order->DDH_ID)}}" method="post" enctype="multipart/form-data">
                                                                    {{csrf_field()}}
                                                                    <td><div class=" "><button type="submit">Hủy</button></div></td>
                                                                    {{-- <button type="submit" name="add_dondathang" class="btn btn-space btn-primary">Lưu đơn đặt hàng</button> --}}
                                                                </form>
                                                                @else
                                                                <td></td>
                                                                @endif
                                                                
                                                            </tr>
                                                        @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            <?php
                            }else{
                            ?>
                                <form action="{{ URL::to('/get-order-tracking') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="blog_thumb blog__hover">
                                        <input type="text" required="" placeholder="Nhập email hoặc mã đơn hàng"
                                            name="order_tracking">
                                    </div>
                                    <div class="blog_fullwidth_desc">
                                        <p>Nhập email hoặc mã đơn hàng để kiểm tra</p>
                                        <button type="submit">Tìm Đơn Hàng</button>
                                    </div>
                                </form>
                            <?php
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--blog area end-->
        </div>
    </div>
    <!-- customer login end -->
@endsection
