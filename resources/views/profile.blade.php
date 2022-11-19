

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Áo Ta Sport </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend/img/favicon.png')}}">
        
        <!-- all css here -->
       <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/plugin.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}">
        <script src="{{asset('public/frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>


        <div class="header_bottom">
            <div class="row">
                    <div class="col-12">
                        <div class="main_menu_inner">
                            <div class="main_menu d-none d-lg-block">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="{{URL::to('/')}}">Trang chủ</a>
                                        </li>
                                        <li><a href="{{URL::to('/shop-sanpham')}}">Sản Phẩm</a>
                                        </li>
                                        <li><a href="{{URL::to('/shop-sanpham-nam')}}" >Nam</a></li>
                                        <li><a href="{{URL::to('/shop-sanpham-nu')}}">Nữ</a></li>
                                        <li><a href="{{URL::to('/yeuthich-sanpham')}}" title="wishlist">Yêu thích</a></li>
                                        <li><a href="{{URL::to('/gio-hang')}}" title="My cart">Giỏ hàng</a></li>
                                        <li><a href="{{URL::to('/order-tracking')}}" title="order tracking">Đơn hàng</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="account_form register">
            <h4>Thông Tin Cá Nhân</h4>
            <form role="form" action="{{URL::to('/update-khachhang')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group" >
                <label>Email </label>
                <br/>
                <label>{{$KhachHang->KH_Email }}</label>
                </div>
                    <label>Tên</label>
                    <input type="text" name="kh_ten" value="{{$KhachHang->KH_Ten }}">
                    </p>
                    <p>   
                    <label>Số điện thoại</label>
                    <input type="text" name="kh_sdt" value="{{$KhachHang->KH_SDT }}">
                    </p>
                    <p>   
                    <label>Địa chỉ</label>
                    <input type="text" name="kh_diachi" value="{{$KhachHang->KH_DiaChi }}">
                    </p>
                    <p>   
                    <label>Mật Khẩu</label>
                    <input type="password" name="kh_matkhau" value="">
                    
                
                <div class="login_submit">
                    <button type="submit">Cập Nhật Thông Tin</button>
                </div>
            </form>
        </div>    
    </div>
      
    </body>
</html>   