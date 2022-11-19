@extends('welcome')
@section('content')


<div class="col-lg-6 col-md-6">
                                            <div class="account_form register">
                                                <h2>Sửa Thông Tin</h2>
                                                <form action="{{URL::to('/edit-khachhang/kh_ID')}}" method="get">
                                                    {{csrf_field()}}
                                                    <p>   
                                                        <p>   
                                                        <label>Địa chỉ email<span>*</span></label>
                                                        <input type="email" name="kh_email" >
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

@endsection