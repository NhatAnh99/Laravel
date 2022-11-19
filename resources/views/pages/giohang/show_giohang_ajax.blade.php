@extends('welcome')
@section('content')

 <!--breadcrumbs area start-->
                        <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.html">Trang chủ</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Giỏ hàng</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->



                         <!--shopping cart area start -->
                        <div class="shopping_cart_area">
                            <form action="{{url('/update-cart')}}" method="post"> 
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table_desc">
                                                @if(session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{session()->get('message')}}
                                                    </div>
                                                @elseif(session()->has('error'))
                                                <div class="alert alert-dangger">
                                                    {{session()->get('error')}}
                                                </div>
                                                @endif
                                                <div class="cart_page table-responsive">
                                                    <table>
                                                <thead>
                                                    <tr>
                                                        <th class="product_remove">Xóa</th>
                                                        <th class="product_thumb">Hình</th>
                                                        <th class="product_name">Sản phẩm</th>
                                                        <th class="product_price">Giá</th>
                                                        <th class="product_quantity">Số lượng</th>
                                                        <th class="product_total">Tổng tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(Session::get('cart')==true)
                                                        @php
                                                            $total = 0;
                                                        @endphp
                                                        @foreach(Session::get('cart') as $key => $cart)
                                                        @php
                                                            $subtotal = $cart['sanpham_soluong'] * $cart['sanpham_gia'];
                                                            $total += $subtotal;
                                                        @endphp

                                                        <tr>
                                                           <td class="product_remove"><a href="{{url('/delete-cart/'.$cart['session_id'])}}"><i class="fa fa-trash-o"></i></a></td>
                                                            <td class="product_thumb"><a href="#"><img src="{{asset('public/upload/sanpham/'.$cart['sanpham_hinh'])}}"  width="70px" height="75px" alt=""></a></td>
                                                            <td class="product_name"><a href="#">{{$cart['sanpham_ten']}}</a></td>
                                                            <td class="product_price">{{number_format($cart['sanpham_gia']).''.'VND'}}</td>
                                                            <td class="product_quantity"><input min="0" max="100" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['sanpham_soluong']}}" type="number"></td>
                                                            <td class="product_total">{{number_format($subtotal).''.'VND'}}</td>  
                                                        </tr>
                                                        @endforeach
                                                    @else
                                                        <tr >
                                                            <td colspan="6" ><h4 style="text-align: center">Không có sản phẩm nào trong giỏ hàng!</h4>
                                                                <a type="button" class="btn btn-danger" href="{{ URL::to('/shop-sanpham')}}" >Mua Hàng</a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>   
                                                </div>  
                                                <div class="cart_submit">
                                                    @if(Session::get('cart')==true)
                                                    <button type="submit">Cập nhật</button>
                                                    @endif
                                                </div>      
                                            </div>
                                         </div>
                                     </div>
                                </form> 


 
                                     <!--coupon code area start-->
                                    <div class="coupon_area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                @if(Session::get('cart'))
                                                @if(Session::get('KH_ID'))
                                                <form method="post" action="{{url('/check-coupon')}}">
                                                    {{csrf_field()}}
                                                <div class="coupon_code">
                                                    <h3>Mã giảm giá</h3>
                                                    <div class="coupon_inner">   
                                                        <p>Nhập mã giảm giá.</p> 
                                                            @if(session()->has('message'))
                                                                <div class="alert alert-success">
                                                                    {!! session()->get('message') !!}
                                                                </div>
                                                            @elseif(session()->has('error'))
                                                                <div class="alert alert-danger">
                                                                    {!! session()->get('error') !!}
                                                                </div>
                                                            @endif                               
                                                        <input placeholder="Mã giảm giá" type="text" name="coupon" >
                                                        <button type="submit" name="check_coupon" class="check_coupon">Hoàn thành</button>
                                                    </div>   
                                                </div>
                                                </form>
                                                @else
                                                <h4 style="text-align: center">Vui lòng đăng nhập để sử dụng mã giảm giá !</h4>
                                                @endif
                                                @else
                                                <h4 style="text-align: center">Không có sản phẩm nào trong giỏ hàng !</h4>
                                                @endif 
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="coupon_code">
                                                    <h3>Thanh toán</h3>
                                                    <div class="coupon_inner">
                                                       <div class="cart_subtotal">
                                                           <p>Tổng tiền</p>
                                                           <p class="cart_amount">
                                                            @if(Session::get('cart')==true)
                                                            {{number_format($total).''.'VND'}}
                                                            @endif
                                                       </p>
                                                       </div>
                                                       <div class="cart_subtotal ">
                                                           <p>Phí ship</p>
                                                           <p class="cart_amount"><span></span></p>
                                                       </div>
                                                       <div class="cart_subtotal ">
                                                           <p>Mã giảm giá</p>
                                                           <p class="cart_amount"><span>Khuyến Mãi:
                                                            @if(Session::get('cart')==true)
                                                                @if(Session::get('coupon'))
                                                                    @foreach (Session::get('coupon') as $key=>$khuyenmai)
                                                                        @if($khuyenmai['phuongthuc_coupon']==1)
                                                                            {{ $khuyenmai['giatri_coupon'] }} %
                                                                            @php
                                                                                $total_coupon =$total- (($total*$khuyenmai['giatri_coupon'])/100);
                                                                            @endphp
                                                                        @else
                                                                        {{number_format( $khuyenmai['giatri_coupon'],0,',','.').' VND' }}
                                                                            @php
                                                                                $total_coupon =$total-$khuyenmai['giatri_coupon'];
                                                                            @endphp
                                                                        @endif
                                                                    @endforeach
                                                                    </span>
                                                                    {{number_format($total_coupon,0,',','.').' VND' }}
                                                                @endif
                                                            @else
                                                            Không có sản phẩm
                                                            @endif
                                                           </p>
                                                       </div>

                                                       <div class="cart_subtotal">
                                                           <p>Tổng thanh toán</p>
                                                           <p class="cart_amount">
                                                            @if(Session::get('cart')==true)
                                                            @if(Session::get('coupon'))
                                                                @foreach (Session::get('coupon') as $key=>$khuyenmai)
                                                                    @if($khuyenmai['phuongthuc_coupon']==1)
                                                                        @php
                                                                            $total_coupon =$total- (($total*$khuyenmai['giatri_coupon'])/100);
                                                                        @endphp

                                                                    @else
                                                                        @php
                                                                            $total_coupon =$total-$khuyenmai['giatri_coupon'];
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{number_format($total_coupon,0,',','.').' VND' }}
                                                            @else
                                                            {{number_format($total,0,',','.').' VND' }}
                                                            @endif
                                                            @endif
                                                        </p>
                                                       </div>
                                                       <div class="checkout_btn">
                                                            <?php
                                                        $khachhang_id = Session::get('KH_ID');
                                                        if($khachhang_id!=null)
                                                        {

                                                        ?>
                                                            <a href="{{URL::to('/fill-thanhtoan')}}">Thanh toán</a>
                                                           
                                                            
                                                            <?php
                                                        }else{
                                                            ?>
                                                             <a href="{{URL::to('/login-thanhtoan')}}">Thanh toán</a>
                                                            <?php
                                                        }
                                                            ?>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--coupon code area end-->
                                </div>
                         <!--shopping cart area end -->
@endsection