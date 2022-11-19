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
                                            <li>Thanh toán</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->
                                                            @if(session()->has('message'))
                                                                <div class="alert alert-success">
                                                                    {!! session()->get('message') !!}
                                                                </div>
                                                            @elseif(session()->has('error'))
                                                                <div class="alert alert-danger">
                                                                    {!! session()->get('error') !!}
                                                                </div>
                                                            @endif  

                        <!--Checkout page section-->
                            <div class="Checkout_section">
                                <div class="row">
                                   <div class="col-12">
                                        <div class="user-actions mb-20">
                                            <h3>
                                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_login" aria-expanded="true">Tính Phí Vận Chuyến</a>
                                            </h3>
                                             <div id="checkout_login" class="collapse" data-parent="#accordion">
                                                <div class="checkout_info">
                                                    <p>Tính phí vận chuyển</p>
                                                    <form action="" method="POST">
                                                        {{csrf_field()}}
                                                        <div class="col-12 mb-30">
                                                            <label for="country">Tỉnh, Thành Phố <span>*</span></label>
                                                            <select name="city" id="city" required="" class="choose city form-control ">
                                                                <option value="">---Tỉnh, Thành Phố---</option>
                                                                @foreach ($city as $key=>$tp)
                                                                    <option value="{{$tp->TP_ID}}">{{ $tp->TP_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-12 mb-30">
                                                            <label for="country">Quận Huyện <span>*</span></label>
                                                            <select name="province" required="" id="province" class="choose province form-control">
                                                                <option value="">---Chọn Quận Huyện---</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 mb-30">
                                                            <label for="country">Xã, Phường <span>*</span></label>
                                                            <select name="wards" required="" id="wards" class="wards form-control">
                                                                <option value="">---Chọn Xã Phường Thị Trấn---</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 mb-30">
                                                            <div class="order_button calculate_vanchuyen">
                                                                <button type="button">Tính Phí Vận Chuyển</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                         <div class="user-actions mb-20">

                                            <h3>
                                            <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_coupon" aria-expanded="true">Sử Dụng Mã Giảm Giá</a>
                                            </h3>
                                         <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                                            <div class="checkout_info">
                                                @if(Session::get('cart'))
                                                    <form action="{{ URL::to('/check-coupon')}}" method="POST">
                                                       {{csrf_field()}}
                                                        <div class="coupon_inner">
                                                            <input placeholder="Mã Giảm Giá" required="" name="coupon" type="text">
                                                            <input type="submit" class="check_coupon" name="check_coupon" value="Sử Dụng Mã">
                                                        </div>
                                                    </form>
                                                    @else
                                                    <h4 style="text-align: center">Chưa có sản phẩm nào trong giỏ hàng!</h4>
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>

                            <div class="checkout_form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <form action="{{URL::to('/save-thanhtoan-khachhang')}}" method="post">
                                                <h3>Thông tin giao hàng</h3>
                                                {{csrf_field()}}
                                                <div class="row">
                                                     
                                                    <div class="col-lg-6 mb-30">
                                                        <label>Tên <span>*</span></label>
                                                        <input type="text" name="gh_ten">    
                                                    </div>
                                                    <div class="col-lg-6 mb-30">
                                                        <label>Số điện thoại<span>*</span></label>
                                                        <input type="text" name="gh_sdt"> 

                                                    </div> 
                                                    <div class="col-lg-6 mb-30">
                                                        <label>Email<span>*</span></label>
                                                        <input type="text" name="gh_email">    
                                                    </div>
                                                    <div class="col-lg-12 mb-30">
                                                        <label> Địa chỉ <span>*</span></label>
                                                          <input type="text" name="gh_diachi"> 

                                                    </div>
                                                     <div class="col-12 mb-30">
                                                        <label for="country">Tỉnh Thành Phố <span>*</span></label>
                                                        <select name="order_city" id="order_city" required="" class="choose-address order_city form-control">
                                                            <option value="-1">---Chọn Tỉnh Thành Phố ---</option>
                                                            @foreach ($city as $key=>$cty)
                                                                <option value="{{$cty->TP_ID}}">{{ $cty->TP_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mb-30">
                                                        <label for="country">Quận Huyện <span>*</span></label>
                                                        <select name="order_province" required="" id="order_province" class="choose-address select-province form-control">
                                                            <option value="-1">---Chọn Quận Huyện---</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mb-30">
                                                        <label for="country">Xã Phường <span>*</span></label>
                                                        <select name="order_wards" required="" id="order_wards" class="select-wards form-control">
                                                            <option value="-1">---Chọn Xã Phường Thị Trấn---</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-12 mb-30">
                                                        <div class="order-notes">
                                                             <label for="order_note">Ghi chú</label>
                                                            <textarea id="gh_ghichu" name="gh_ghichu" placeholder="Ghi chú thông tin."></textarea>
                                                        </div>    
                                                    </div>
                                                    <div class="col-lg-12 mb-30">
                                                    <div class="payment_method">
                                                        <div class="panel-default">
                                                             <input id="payment" value="0" checked name="order_checkout_pay_method" type="radio">
                                                             <label for="payment" data-toggle="collapse" data-target="#method" aria-controls="method">Thanh Toán Khi Nhận Hàng</label>
                                                         </div>
                                                        <div class="panel-default">
                                                             <input id="payment_defult" value="1" name="order_checkout_pay_method" type="radio" >
                                                             <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">Chuyển Khoản</label>
                                                             <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                                             <div class="card-body1">
                                                                <p>Vui lòng chuyển tiền đến số tài khoản : 0123456789</p>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div> 
                                            </div>  
                                                    <div class="col-12 mb-30">
                                                        <div class="order_button">
                                                            <button type="submit">Xác Nhận Đơn Hàng</button>
                                                        </div>
                                                    </div>                                                  
                                                </div>
                                            </form>    
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <form action="#" method="post" >    
                                                {{csrf_field()}}
                                                <h3>Giỏ hàng</h3> 
                                                <div class="order_table table-responsive mb-30" >
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Sản phẩm</th>
                                                                <th>Thành tiền</th>
                                                                <th>Chi tiết</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(Session::get('cart')==true)
                                                            @php
                                                            $total=0;
                                                            @endphp
                                                            @foreach (Session::get('cart') as $key =>$sp)
                                                                @php
                                                                    $total+=$sp['sanpham_gia']*$sp['sanpham_soluong'];
                                                                @endphp
                                                                <tr>
                                                                    <td><strong>{{ $sp['sanpham_ten'] }}</strong> </td>
                                                                    <td><strong>{{number_format( $sp['sanpham_gia'] * $sp['sanpham_soluong'] ,0,',','.').' VND' }}</strong></td>
                                                                    <td> <strong> Số lượng: {{ $sp['sanpham_soluong'] }}</strong>
                                                                    </td>
                                                                    
                                                                </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Tổng tiền sản phẩm</th>
                                                                <td><strong>
                                                                    @if(Session::get('cart')==true)
                                                                    {{number_format($total,0,',','.').' VND' }}
                                                                    @endif
                                                                    </strong>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="order_total">
                                                                <th>Nội dung</th>
                                                                
                                                                <td><strong>
                                                                    @if(Session::get('cart')==true)
                                                                    @if(Session::get('coupon'))
                                                                        @foreach (Session::get('coupon') as $key=>$khuyenmai)
                                                                            @if($khuyenmai['phuongthuc_coupon']==1)
                                                                                {{ $khuyenmai['giatri_coupon'] }} %
                                                                                @php
                                                                                    $total_coupon =$total- (($total*$khuyenmai['giatri_coupon'])/100);
                                                                                @endphp
                                                                            @elseif($khuyenmai['phuongthuc_coupon']==2)
                                                                            {{number_format( $khuyenmai['giatri_coupon'],0,',','.').' VNĐ' }}
                                                                                @php
                                                                                    $total_coupon =$total-$khuyenmai['giatri_coupon'];
                                                                                @endphp
                                                                            @else
                                                                                <span>0 VNĐ</span>
                                                                                @php
                                                                                    $total_coupon =$total-$khuyenmai['giatri_coupon'];
                                                                                @endphp
                                                                            @endif
                                                                        @endforeach
                                                                        <!-- {{number_format($total_coupon,0,',','.').' VNĐ' }} -->
                                                                    @endif
                                                                @else
                                                                Không có sản phẩm
                                                                @endif
                                                                
                                                            </strong></td>
                                                            <td><strong>
                                                                @if(Session::get('cart')==true)
                                                                    @if(Session::get('coupon'))     
                                                                    <span>{{$khuyenmai['noidung_coupon']}}</span>
                                                                    @endif
                                                                @endif
                                                                </td></strong>
                                                            </tr>
                                                            <tr>
                                                                <th>Phí ship</th>
                                                                <td><strong>
                                                                    @if(Session::get('feeship'))
                                                                       
                                                                            @php
                                                                                $fee_ship=Session::get('feeship');
                                                                            @endphp
                                                                            {{number_format($fee_ship,0,',','.').' VNĐ' }}
                                                                        
                                                                    @else
                                                                    {{number_format(35000,0,',','.').' VNĐ' }}
                                                                    @endif
                                                                </strong></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="order_total">
                                                                <th>Tổng thanh toán</th>
                                                                <td><strong>
                                                                     @if(Session::get('cart'))
                                                                        @if(Session::get('coupon'))
                                                                           @if(Session::get('feeship'))
                                                                                {{number_format($fee_ship + $total_coupon,0,',','.').' VNĐ' }}
                                                                           @else
                                                                                {{number_format($total_coupon + 35000,0,',','.').' VNĐ' }}
                                                                           @endif
                                                                        @else
                                                                            @if(Session::get('feeship'))
                                                                                {{number_format($total + $fee_ship,0,',','.').' VNĐ' }}
                                                                            @else
                                                                                {{number_format($total + 35000,0,',','.').' VNĐ' }}
                                                                            @endif
                                                                        @endif
                                                                    @else
                                                                        {{number_format(0,0,',','.').' VNĐ' }}
                                                                    @endif
                                                            </strong></td>
                                                            <td></td>
                                                            </tr>
                                                        </tfoot> 
                                                    </table>     
                                                </div>
                                            </form>         
                                        </div>
                                    </div> 
                                </div>        
                        </div>
                        <!--Checkout page section end-->

@endsection
