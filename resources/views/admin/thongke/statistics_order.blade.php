@extends('admin_layout')
@section('admin_content')
<div class="content-box-header">
 <h1 align="center">Thống kê đơn đặt hàng</h1>
    </div>
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box show_search_order_statistics">
                            <label class="col-form-label"> <h4>Thống Kê Doanh Thu</h4></label>
                            <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100 " cellspacing="0" id="tickets-table">
                                <thead class="bg-light">
                                <tr>
                                    <th class="font-weight-medium">Doanh Thu</th>
                                    <th class="font-weight-medium">Tổng Tiền Đã Bán</th>
                                    <th class="font-weight-medium">Tổng Tiền Đơn Hàng</th>
                                    <th class="font-weight-medium">Số Lượng Sản Phẩm</th>
                                    <th class="font-weight-medium">Số Lượng Đã Bán</th>
                                </tr>
                                </thead>
                                <tbody class="font-14 " >

                                    <tr>
                                        <td>
                                            {{number_format($sum_total_order_success,0,',','.' ).' VNĐ' }}
                                        </td>
                                        <td>
                                            {{number_format( $sum_total_order_success ,0,',','.' ).' VNĐ' }}
                                        </td>
                                        <td>
                                            {{number_format( $sum_total_order ,0,',','.' ).' VNĐ' }}
                                        </td>
                                        <td>
                                            {{ number_format( $count_detail ,0,',','.' ) }}
                                        </td>
                                        <td>
                                            {{ number_format( $sum_detail ,0,',','.' ) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <label class="col-form-label"> <h4>Thống Kê Đơn Hàng</h4></label>
                            <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100 " cellspacing="0" id="tickets-table">
                                <thead class="bg-light">
                                <tr>
                                    <th class="font-weight-medium">Số Đơn Hàng</th>
                                    <th class="font-weight-medium">Hoàn Tất Đơn Hàng</th>
                                    <th class="font-weight-medium">Đơn Hàng Chưa Xử Lý</th>
                                    <th class="font-weight-medium">Đơn Hàng Đã Xử Lý</th>
                                    <th class="font-weight-medium">Đơn Hàng Đang Giao</th>
                                    <th class="font-weight-medium">Đơn Hàng Đã Giao</th>
                                    <th class="font-weight-medium">Đơn Hàng Đã Hủy</th>
                                </tr>
                                </thead>
                                <tbody class="font-14 " >

                                    <tr>
                                        <td>
                                            {{ number_format( $count_order ,0,',','.' ) }}
                                        </td>
                                        <td>
                                            {{ number_format( $count_order_completion ,0,',','.' ) }}
                                        </td>
                                        <td>
                                            {{ number_format( $count_order_unconfirmed ,0,',','.' ) }}
                                        </td>
                                        <td>
                                            {{ number_format( $count_order_confirmed ,0,',','.' ) }}
                                        </td>
                                        <td>
                                            {{ number_format( $count_order_in_transit ,0,',','.' ) }}
                                        </td>
                                        <td>
                                            {{ number_format( $count_order_delivered ,0,',','.' ) }}
                                        </td>
                                        <td>
                                            {{ number_format( $count_order_cancel ,0,',','.' ) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <label class="col-form-label"> <h4>Đơn Hàng</h4></label>
                            <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100 " cellspacing="0" id="tickets-table">
                                <thead class="bg-light">
                                <tr>
                                    <th class="font-weight-medium">Mã Đơn Hàng</th>
                                    <th class="font-weight-medium">Ngày Đặt Hàng</th>
                                    <th class="font-weight-medium">Khách Hàng</th>
                                    <th class="font-weight-medium">Tổng Cộng</th>
                                    <th class="font-weight-medium">Trạng Thái</th>
                                </tr>
                                </thead>
                                <tbody class="font-14" >
                                    @foreach ($all_order_statistics as $key=>$order)
                                    <tr>
                                        <td>
                                            {{ $order->DDH_MaDon }}
                                        </td>
                                        <td>
                                            {{ date('d-m-Y', strtotime( $order->DDH_NgayDat)) }}
                                        </td>
                                        <td>
                                            @if($order->KH_ID)
                                                {{ $order->KhachHang->KH_Ten }}
                                            @else
                                                Chưa cập nhật
                                            @endif
                                        </td>
                                        <td>
                                            {{number_format( $order->DDH_TongTien ,0,',','.' ).' VNĐ' }}
                                        </td>
                                        <td>
                                            @if($order->DDH_TrangThai==0)
                                            Chưa Xử Lý
                                            @elseif($order->DDH_TrangThai==1)
                                            Đã Xử Lý
                                            @elseif($order->DDH_TrangThai==2)
                                            Đang Xử Lý
                                            @elseif($order->DDH_TrangThai==3)
                                            Hoàn Tất Đơn Hàng
                                            @elseif($order->DDH_TrangThai==4)
                                            Hủy Đơn Hàng
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <nav>
                                <ul class="pagination pagination-rounded mb-3">
                                    {{ $all_order_statistics->links('layout.paginationlinks') }}
                                </ul>
                            </nav>
                        </div>
                    </div><!-- end col -->
                </div>
            <!-- end content -->
            <!-- end page title -->
        </div>
        <!-- container -->
    </div>
    <!-- content -->

    <!-- Footer Start -->
    <!-- end Footer -->
</div>

@endsection
