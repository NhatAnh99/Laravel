@extends('admin_layout')
@section('admin_content')

 <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Áo Ta Sport</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class="active"><a href="{{URL::to('/admin')}}"><i class="icon mdi mdi-layers"></i><span>Áo Ta</span></a>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Quản lý khách hàng</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/all-khachhang')}}">Khách Hàng</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Quản lý sản phẩm</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/all-sanpham')}}">Sản phẩm</a>
                      </li>
                      <li><a href="{{URL::to('/all-loaisanpham')}}">Loại sản phẩm</a>
                      </li>
                      <li><a href="{{URL::to('/list-coupon')}}">Khuyến mãi</a>
                      </li>
                      <li><a href="{{URL::to('/comment')}}">Bình luận</a>
                      </li>
                      <li><a href="{{URL::to('/all-xuhuong')}}">Xu Hướng</a>
                      </li>
                      <li><a href="{{URL::to('/all-phongcach')}}">Phong Cách</a>
                      </li>
                      <li><a href="{{URL::to('/all-nhacungcap')}}">Nhà cung cấp</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Quản lý đơn hàng</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/all-dondathang')}}">Đơn hàng</a>
                      </li>
                      <li><a href="{{URL::to('/chuaxuly-dondathang')}}">Đơn hàng chưa xử lý</a>
                      </li>
                      <li><a href="{{URL::to('/daxuly-dondathang')}}">Đơn hàng đã xử lý</a>
                      </li>
                      <li><a href="{{URL::to('/dangxuly-dondathang')}}">Đơn hàng đang xử lý</a>
                      </li>
                      <li><a href="{{URL::to('/hoantat-dondathang')}}">Hoàn tất đơn hàng</a>
                      </li>
                      <li><a href="{{URL::to('/huy-dondathang')}}">Hủy đơn hàng</a>
                      </li>
                      </li>
                      <li><a href="ui-buttons.html">Tạo đơn hàng</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Quản lý Giao hàng</span></a>
                    <ul class="sub-menu">
                      </li>
                      <li><a href="{{URL::to('/van-chuyen')}}">Phí vận chuyển</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Quản lý Thống kê</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/sales-statistics')}}">Thống kê đơn hàng</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection