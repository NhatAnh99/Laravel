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
                            <form action="#"> 
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table_desc">
                                                <?php
                                                $content = Cart::content();
                                                ?>
                                                <div class="cart_page table-responsive">
                                                    <table>
                                                <thead>
                                                    <tr>
                                                        <th class="product_remove">Xóa</th>
                                                        <th class="product_thumb">Hình ảnh</th>
                                                        <th class="product_name">Sản phẩm</th>
                                                        <th class="product-price">Giá</th>
                                                        <th class="product_quantity">Số lượng</th>
                                                        <th class="product_total">Tổng tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($content as $v_content)
                                                    <tr>
                                                       <td class="product_remove"><a href="{{URL::to('/delete-giohang/'.$v_content->rowId)}}"><i class="fa fa-trash-o"></i></a></td>
                                                        <td class="product_thumb"><a href="#"><img src="{{URL::to('public/upload/sanpham/'.$v_content->options->image)}}" alt=""></a></td>
                                                        <td class="product_name"><a href="#">{{$v_content->name}}</a></td>
                                                        <td class="product-price">{{number_format($v_content->price).''.'VND'}}</td>
                                                        <td class="product_quantity"><input min="0" max="100" value="{{$v_content->qty}}" type="number"></td>
                                                        <td class="product_total">
                                                            
                                                            <?php
                                                            $subtotal = $v_content->price * $v_content->qty;
                                                            echo number_format($subtotal).' '.'VND';
                                                            ?>

                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>   
                                                </div>  
                                                <div class="cart_submit">
                                                    <button type="submit">update cart</button>
                                                </div>      
                                            </div>
                                         </div>
                                     </div>
                                     <!--coupon code area start-->
                                    <div class="coupon_area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="coupon_code">
                                                    <h3>Coupon</h3>
                                                    <div class="coupon_inner">   
                                                        <p>Enter your coupon code if you have one.</p>                                
                                                        <input placeholder="Coupon code" type="text">
                                                        <button type="submit">Apply coupon</button>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="coupon_code">
                                                    <h3>Cart Totals</h3>
                                                    <div class="coupon_inner">
                                                       <div class="cart_subtotal">
                                                           <p>Tổng tiền</p>
                                                           <p class="cart_amount">{{Cart::subtotal().''.'VND'}}</p>
                                                       </div>
                                                       <div class="cart_subtotal ">
                                                           <p>Phí</p>
                                                           <p class="cart_amount">0 VND</p>
                                                       </div>
                                                       <div class="cart_subtotal">
                                                           <p>Tổng thanh toán</p>
                                                           <p class="cart_amount">{{Cart::subtotal().''.'VND'}}</p>
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
                                </form> 
                         </div>
                         <!--shopping cart area end -->


@endsection