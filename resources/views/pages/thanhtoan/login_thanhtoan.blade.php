@extends('welcome')
@section('content')
 <!-- customer login start -->
                        <div class="customer_login">
                            <div class="row">
                                       <!--login area start-->
                                        <div class="col-lg-6 col-md-6">
                                            <div class="account_form">
                                                <h2>Đăng nhập</h2>
                                                <form action="{{URL::to('/login-khachhang')}}" method="post">
                                                    {{csrf_field()}}
                                                    <p>   
                                                        <label>Địa chỉ email <span>*</span></label>
                                                        <input type="email" name="kh_email" placeholder="abc@gmail.com">
                                                     </p>
                                                     <p>   
                                                        <label>Mật khẩu <span>*</span></label>
                                                        <input type="password" name="kh_matkhau" placeholder="Mật khẩu">
                                                     </p>   
                                                    <div class="login_submit">
                                                        <button type="submit">Đăng nhập</button>
                                                        <label for="remember">
                                                            <input id="remember" type="checkbox">
                                                            Lưu đăng nhập
                                                        </label>
                                                        <a href="#">Quên mật khẩu?</a>
                                                    </div>  
                                                </form>
                                             </div>    
                                        </div>
                                        <!--login area start-->

                                        <!--register area start-->
                                        <div class="col-lg-6 col-md-6">
                                            <div class="account_form register">
                                                <h2>Đăng ký</h2>
                                                <form action="{{URL::to('/add-khachhang')}}" method="post">
                                                    {{csrf_field()}}
                                                    <p>   
                                                        <p>   
                                                        <label>Địa chỉ email<span>*</span></label>
                                                        <input type="email" name="kh_email" placeholder="abc@gmail.com">
                                                     </p>
                                                     <p>   
                                                        <label>Mật khẩu<span>*</span></label>
                                                        <input type="password" name="kh_matkhau">
                                                     </p>
                                                        <label>Tên<span>*</span></label>
                                                        <input type="text" name="kh_ten">
                                                     </p>
                                                     <p>   
                                                        <label>Số điện thoại<span>*</span></label>
                                                        <input type="text" name="kh_sdt">
                                                     </p>
                                                     <p>   
                                                        <label>Địa chỉ<span>*</span></label>
                                                        <input type="text" name="kh_diachi" >
                                                     </p>
                                                    
                                                    <div class="login_submit">
                                                        <button type="submit">Đăng kí</button>
                                                    </div>
                                                </form>
                                            </div>    
                                        </div>
                                        <!--register area end-->
                                    </div>
                        </div>
                        <!-- customer login end -->
@endsection