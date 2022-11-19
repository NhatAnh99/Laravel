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
            <!-- Add your site or application content here -->
                                   
            <!--pos page start-->
            <div class="pos_page">
                <div class="container">
                   <!--pos page inner-->
                    <div class="pos_page_inner">  
                       <!--header area -->
                        <div class="header_area">
                               <!--header top--> 
                                     <div class="header_top"> 
                                            <div class="logo">
                                                <a href="{{URL::to('/')}}"><img src="{{asset('public/frontend/img/logo/logos2.jpg')}}" alt="" ></a>
                                            </div>
                                    </div>
                                        
                                   <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="header_links">

                                            <ul>
                                                        <li><a href="{{URL::to('/order-tracking')}}" title="order tracking">Đơn hàng</a></li>
                                                    <?php
                                                    $khachhang_id = Session::get('KH_ID');
                                                    if($khachhang_id!=null){
                                                    ?>
                                                        <li><a href="{{URL::to('/profile')}}" title="Login">Thông Tin Cá Nhân</a></li>
                                                        <li><a href="{{URL::to('/logout-thanhtoan')}}" title="Login">Đăng xuất</a></li>
                                                    <?php
                                                    }else{
                                                    ?>
                                                        <li><a href="{{URL::to('/login-thanhtoan')}}" title="Login">Đăng nhập</a></li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>   
                                        </div>
                                   </div> 
                                </div> 
                                <!--header top end-->
                                <!--header middel end-->      
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
                                                           
                                                            <!-- <li><a href="#">Mở Rộng</a>
                                                                <div class="mega_menu">
                                                                    <div class="mega_top fix">
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Giải Đấu</a></h3>
                                                                            <ul>
                                                                                <li><a href="portfolio.html">Tuyển Quốc Gia</a></li>
                                                                                
                                                                                <li><a href="{{URL::to('/shop-ngoaihanganh')}}">Ngoại Hạng Anh </a></li>
                                                                                
                                                                                <li><a href="about.html">Giải Tây Ban Nha </a></li>
                                                                                <li><a href="about-2.html">Giải Đức</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Phụ Kiện Thể Thao</a></h3>
                                                                            <ul>
                                                                                <li><a href="blog.html">Băng Keo Thể Thao </a></li>
                                                                                <li><a href="blog-details.html">Tất Chống Trượt </a></li>
                                                                                <li><a href="404.html">404</a></li>
                                                                            </ul>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </li> -->
                                                            
                                                          
                                                        </ul>
                                                    </nav>
                                                </div>
                        <!--header end -->

                                <!--header middel--> 
                                <div class="header_middel">
                                    <div class="row align-items-center">
                                       <!--logo start-->
                                        <div class="col-lg-3 col-md-3">
                                            <div class="logo">
                                                <a href="index.html"><img src="asset/img/logo/logo.jpg.png" alt=""></a>
                                            </div>
                                        </div>
                                        <!--logo end-->
                                        <div class="col-lg-9 col-md-9">
                                            <div class="header_right_info">
                                                <div class="search_bar">
                                                    <form action="{{URL::to('/timkiem-sanpham')}}" method="post">
                                                        {{csrf_field()}}
                                                        <input placeholder="Search..." type="Tìm kiếm sản phẩm" name="tukhoa_sanpham">
                                                        <button type="submit"><i class="fa fa-search"></i></button>
                                                    </form>
                                                </div>
                                                <div class="shopping_cart">
                                                    <a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> <i class="fa fa-angle-down"></i></a>

                                                    <!--mini cart-->
                                                    <!-- <div class="mini_cart">
                                                        <div class="cart_item">
                                                           <div class="cart_img">
                                                               <a href="#"><img src="asset/img/cart/cart.jpg" alt=""></a>
                                                           </div>
                                                            <div class="cart_info">
                                                                <a href="#">lorem ipsum dolor</a>
                                                                <span class="cart_price">$115.00</span>
                                                                <span class="quantity">Qty: 1</span>
                                                            </div>
                                                            <div class="cart_remove">
                                                                <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="cart_item">
                                                           <div class="cart_img">
                                                               <a href="#"><img src="asset/img/cart/cart2.jpg" alt=""></a>
                                                           </div>
                                                            <div class="cart_info">
                                                                <a href="#">Quisque ornare dui</a>
                                                                <span class="cart_price">$105.00</span>
                                                                <span class="quantity">Qty: 1</span>
                                                            </div>
                                                            <div class="cart_remove">
                                                                <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="shipping_price">
                                                            <span> Shipping </span>
                                                            <span>  $7.00  </span>
                                                        </div>
                                                        <div class="total_price">
                                                            <span> total </span>
                                                            <span class="prices">  $227.00  </span>
                                                        </div>
                                                        <div class="cart_button">
                                                            <a href="checkout.html"> Check out</a>
                                                        </div>
                                                    </div> -->
                                                    <!--mini cart end-->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                            </div>
                    <!--pos home section end-->
                        <div class="pos_home_section">
                            <div class="row">
                               <!--banner slider start-->
                                <div class="col-12">
                                    <div class="banner_slider slider_two">
                                        <div class="slider_active owl-carousel">
                                            <div class="single_slider" style="background-image: url({{asset('public/frontend/img/slider/slider_4.png')}}">
                                                <div class="slider_content">
                                                    <div class="slider_content_inner">  
                                                        <h1>Thể Thao Vì Sức Khỏe</h1>
                                                        <p>Vận động sẽ giúp cho chúng ta tràn đầy sức sống <br> Sức sống  sẽ giúp cuộc sống của mỗi chúng ta càng trở nên tươi đẹp hơn.</p>
                                                        
                                                    </div>     
                                                </div>
                                            </div>
                                            <div class="single_slider" style="background-image: url({{asset('public/frontend/img/slider/slider_9.png')}}">
                                                 <div class="slider_content">
                                                    <div class="slider_content_inner">  
                                                    <h1>Thể Thao Vì Sức Khỏe</h1>
                                                        <p>Vận động sẽ giúp cho chúng ta tràn đầy sức sống <br> Sức sống  sẽ giúp cuộc sống của mỗi chúng ta càng trở nên tươi đẹp hơn.</p>
                                                       
                                                    </div>     
                                                </div> 
                                            </div>
                                            <div class="single_slider" style="background-image: url({{asset('public/frontend/img/slider/slider_8.png')}}">
                                                 <div class="slider_content">
                                                    <div class="slider_content_inner">  
                                                    <h1>Thể Thao Vì Sức Khỏe</h1>
                                                        <p>Vận động sẽ giúp cho chúng ta tràn đầy sức sống <br> Sức sống  sẽ giúp cuộc sống của mỗi chúng ta càng trở nên tươi đẹp hơn.</p>
                                                        
                                                    </div>     
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <!--banner slider start-->
                                </div>    
                            </div> 
                           
                            
                                @yield('content')
                         
                                   
                            <!--banner area start-->
                            <!--banner area end--> 
                                                          
                            <!--featured product area start-->
                            
                            <!--featured product area start-->   
                                   
                            <!--blog area start-->

                            
                                   
                            <!--brand logo strat--> 
                            <div class="brand_logo brand_two">
                                <div class="block_title">
                                    <h3>Xem Theo loại sản phẩm</h3>
                                </div>
                                <div class="row">
                                    <div class="brand_active owl-carousel">
                                        @foreach($loai_loaisanpham as $key => $lsp)
                                        <div class="col-lg-2">
                                            <div class="single_brand">
                                                <a href="{{URL::to('/loai-san-pham/'.$lsp->LSP_ID)}}"><img src="{{asset('public/upload/sanpham/'.$lsp->LSP_Hinh)}}" height="100px" alt=""><br><h6 align="center">{{$lsp->LSP_Ten}}</h6></a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>       
                            <!--brand logo end-->
                            <!-- <div class="brand_logo brand_two">
                                <div class="block_title">
                                    <h3>xem theo Xu hướng</h3>
                                </div>
                                <div class="row">
                                    <div class="brand_active owl-carousel">
                                        @foreach($xh_xuhuong as $key => $xh)
                                        <div class="col-lg-2">
                                            <div class="single_brand">
                                                <a href="{{URL::to('/xu-huong-san-pham/'.$xh->XH_ID)}}"><img src="{{asset('public/upload/sanpham/'.$xh->XH_Hinh) }}" alt="">
                                                    <br><h6 align="center"> {{$xh->XH_Ten}}</h6></a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>        -->
                            <div class="brand_logo brand_two">
                                <div class="block_title">
                                    <h3> xem theo Phong cách</h3>
                                </div>
                                <div class="row">
                                    <div class="brand_active owl-carousel">
                                        @foreach($pc_phongcach as $key => $pc)
                                        <div class="col-lg-2">
                                            <div class="single_brand">
                                                <a href="{{URL::to('/phong-cach-san-pham/'.$pc->PC_ID)}}"><img src="{{asset('public/upload/sanpham/'.$pc->PC_Hinh) }}" alt=""><br><h6 align="center"> {{$pc->PC_Ten}}</h6></a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>                                          
                        </div>
                        <!--pos home section end-->
                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->
            
            <!--footer area start-->
            <div class="footer_area">
                <div class="footer_top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer_widget">
                                    <h3>Áo Ta Sport</h3>
                                    <p>Thời Trang Cùng Sức Khỏe</p>
                                    <div class="footer_widget_contect">
                                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>Cao lỗ - Q.8 - TPHCM</p>

                                        <p><i class="fa fa-mobile" aria-hidden="true"></i> 0708886868</p>
                                        <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>nhatanhle6343322@gmail.com </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer_widget">
                                    <h3>Tài khoản</h3>
                                    <ul>
                                        <li><a href="#">Đăng nhập</a></li>
                                        <li><a href="#">Đăng ký</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer_widget">
                                    <h3>Thông tin Shop</h3>
                                    <ul>
                                        <li><a href="#">Giới thiệu shop</a></li>
                                        <li><a href="#">Khuyến mãi</a></li>
                                        <li><a href="#">Phí vận chuyển</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer_widget">
                                    <h3>Hổ trợ khách hàng</h3>
                                    <ul>
                                        <li><a href="#"> Hướng dẫn đặt hàng</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="copyright_area">
                                    <ul>
                                        <li><a href="#">Áo Ta </a></li>
                                    </ul>
            
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="footer_social text-right">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-wifi" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer area end-->
            
            <!-- modal area start --> 
           
          <!-- modal area end --> 
            
            
      
        
        <!-- all js here -->
        <script src="{{asset('public/frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/popper.js')}}"></script>
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/ajax-mail.js')}}"></script>
        <script src="{{asset('public/frontend/js/plugins.js')}}"></script>
        <script src="{{asset('public/frontend/js/main.js')}}"></script>

        <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>


        <script type="text/javascript">
            $(document).ready(function()
            {
                $('.add-to-cart').click(function(){

                    var id= $(this).data('id_sanpham');
                    var sanpham_id = $('.sanpham_id_' + id).val();
                    var sanpham_ten = $('.sanpham_ten_' + id).val();
                    var sanpham_gia = $('.sanpham_gia_' + id).val();
                    var sanpham_hinh = $('.sanpham_hinh_' + id).val();
                    var sanpham_soluong = $('.sanpham_soluong_' + id).val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method:'post',
                        data:{sanpham_id:sanpham_id,sanpham_ten:sanpham_ten,sanpham_gia:sanpham_gia,sanpham_hinh:sanpham_hinh,sanpham_soluong:sanpham_soluong,_token:_token},
                        success:function(){
                            swal({
                                title:"Thêm sản phẩm vào giỏ hàng thành công",
                                text: "Bạn có thể mua tiếp hoặc tới giỏ hàng để thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Ở Lại Trang",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đến Giỏ Hàng",
                                closeOnConfirm: false
                            },
                            function(){
                                window.location.href="{{url('/gio-hang')}}";
                            });
                        }
                    });
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.choose').on('change',function() {
                  var action = $(this).attr('id');
                  var ma_id = $(this).val();
                  var _token = $('input[name="_token"]').val();
                  var result = '';

                  if(action == 'city')
                  {
                    result = 'province';
                  }else{
                    result = 'wards';
                  }
                  $.ajax({
                    url: '{{url('/select-vanchuyen-home')}}',
                    method: 'post',
                    data : {action:action,ma_id:ma_id,_token:_token},
                    success:function(data){
                      $('#'+result).html(data);
                    }
                  });
                });
                $('.choose-address').on('change',function(){
                var action = $(this).attr('id');
                var ma_id = $(this).val();
                var _token = $('input[name="_token"]').val();
                var result = '';
                if(action=='order_city'){
                    result = 'order_province';
                }else{
                    result = 'order_wards';
                }
                $.ajax({
                    url : '{{url('/select-address')}}',
                    method: 'POST',
                    data:{action:action,ma_id:ma_id,_token:_token},
                    success:function(data){
                       $('#'+ result).html(data);
                    }
                });
            });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
            $('.calculate_vanchuyen').on('click',function(){
            var city = $('.city').val();
            var province = $('.province').val();
            var wards = $('.wards').val();
            var _token = $('input[name="_token"]').val();
            if(city==''&& province==''&&wards==''){
                alert('Làm ơn chọn địa điểm để tính phí');
            }else{
                $.ajax({
                    url : '{{url('/calculate-fee')}}',
                    method: 'post',
                    data:{city:city, province:province, wards:wards, _token:_token},
                    success:function(data){
                         window.location.href = "{{url('/fill-thanhtoan')}}";  
                    }
                });
            }
            });
            })
        </script>
        <script type="text/javascript">
            show_product_wishlist();
            count_product_wishlist();
            view_wishlist();
            function show_product_wishlist(){
                if(localStorage.getItem('data_wishlist')!=null){
                    var data = JSON.parse(localStorage.getItem('data_wishlist'));
                    data.reverse();
                    for(i=0;i<data.length;i++){
                        var id =data[i].id;
                        var name = data[i].name;
                        var price = data[i].price;
                        var image = data[i].image;
                        var url = data[i].url;
                        $('#show_product_wishlist').append('<tr><td class="product_remove"><a type="button" onclick="delete_row_wishlist('+id+');">X</a></td><td class="product_thumb"><a href="'+url+'"><img src="'+image+'" alt="" width="70px" height="75px"></a></td><td class="product_name"><a href="'+url+'">'+name+'</a></td><td class="product-price">'+price+'</td><td class="product_total"><a href="'+url+'">Detail</a></td></tr>');
                    }
                }
            }
            function delete_row_wishlist(pro_id_wishlist){
                if(localStorage.getItem('data_wishlist')!=null){
                    var data = JSON.parse(localStorage.getItem('data_wishlist'));
                    data.reverse();
                    var count=1;
                    for(i=0;i<data.length;i++){
                        var id =data[i].id;
                        if(id==pro_id_wishlist){
                            data.splice(i, 1);//thêm 0 phần tử vào data tại i => xóa i i= vị trí 1=sl xóa
                            localStorage.data_wishlist=JSON.stringify(data);
                            break;
                        }
                    }
                    alert('Bạn có chắc muốn xóa');
                    window.location.reload();
                }
            }
            function view_wishlist(){
                if(localStorage.getItem('data_wishlist')!=null){
                    var data = JSON.parse(localStorage.getItem('data_wishlist'));
                    data.reverse();
                    var count=1;
                    for(i=0;i<data.length;i++){
                        if(count<=3){
                            var id =data[i].id;
                            var name = data[i].name;
                            var price = data[i].price;
                            var image = data[i].image;
                            var url = data[i].url;
                            $('#list_row_wishlist').append('<div class="cart_item"><div class="cart_img"><a href="'+url+'"><img src="'+image+'" alt=""></a></div><div class="cart_info"><a href="'+url+'">'+name+'</a><span class="cart_price">'+price+'</span></div><div class="cart_remove"><a type="button" title="Remove this item" onclick="delete_row_wishlist('+id+');"><i class="fa fa-times-circle"></i></a></div></div>');
                            count++;
                        }else{
                            break;
                        }
                    }
               }
           }
           function count_product_wishlist(){
                if(localStorage.getItem('data_wishlist')!=null){
                    var data = JSON.parse(localStorage.getItem('data_wishlist'));
                    data.reverse();
                $('#count_product_wishlist').append(data.length +' products');
            }
           }


            function add_wistlist(clicked_id){
                var id = clicked_id;
                var name = document.getElementById('wishlist_viewed_product_name'+id).value;
                var price = document.getElementById('wishlist_viewed_product_price'+id).value;
                var image = document.getElementById('wishlist_viewed_product_image'+id).src;
                var get_url = document.getElementById('wishlist_viewed_product_url'+id).href;
                if(get_url!=null){
                    var url = document.getElementById('wishlist_viewed_product_url'+id).href;
                }else{
                    var url = document.getElementById('wishlist_viewed_product_url'+id).value;
                }
                var newItem = {
                    'url':url,
                    'id' :id,
                    'name': name,
                    'price': price,
                    'image': image
                }
                if(localStorage.getItem('data_wishlist')==null){
                   localStorage.setItem('data_wishlist', '[]');
                }
                var old_data = JSON.parse(localStorage.getItem('data_wishlist'));
                var matches = $.grep(old_data, function(obj){
                    return obj.id == id;
                })
                if(matches.length){
                    alert('Sản phẩm đã được thêm vào yêu thích');
                }else{
                    old_data.push(newItem);
                    $('#list_row_wishlist').append('<div class="cart_item"><div class="cart_img"><a href="'+newItem.url+'"><img src="'+newItem.image+'" alt=""></a></div><div class="cart_info"><a href="'+newItem.url+'">'+newItem.name+'</a><span class="cart_price">'+newItem.price+'</span></div><div class="cart_remove"><a type="button" title="Remove this item" onclick="delete_row_wishlist('+newItem.id+');"><i class="fa fa-times-circle"></i></a></div></div>');
                    alert('Đã thêm vào yêu thích');
                }
                localStorage.setItem('data_wishlist', JSON.stringify(old_data));
           }
        </script>
        <script type="text/javascript">
        function load_comment(){
            var comment_product_id = $('.comment_product_id').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url:"{{url('/load-comment')}}",
              method:"POST",
              data:{comment_product_id:comment_product_id, _token:_token},
              success:function(data){
                $('#comment_show').html(data);
              }
            });
        }
        </script>
    </body>
</html>
