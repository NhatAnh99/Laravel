                        @extends('welcome')
                        @section('content')
                              <!--new product area start-->
                                 <div class="new_product_area">
                                     <div class="block_title">
                                            <h3>Sản phẩm tìm kiếm</h3>
                                        </div>
                                        <div class="row">
                                            <div class="product_active owl-carousel">
                                                @foreach($timkiem_sanpham as $key => $sp)
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="single-product.html"><img src="{{URL::to('public/upload/sanpham/'.$sp->SP_Hinh)}}" alt=""></a> 
                                                           <div class="img_icone">
                                                               <img src="{{URL::to('public/upload/sanpham/'.$sp->SP_Hinh)}}" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="{{URL::to('/chi-tiet-san-pham/'.$sp->SP_ID)}}"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="gia_sanpham">{{number_format($sp->SP_Gia).' '.'VND'}}</span>
                                                            <h3 class="product_title"><a href="single-product.html">{{$sp->SP_Ten}}</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                <li><a href="#" title=" Add to Wishlist ">Thêm yêu thích</a></li>
                                                                <li><a href="{{URL::to('/chi-tiet-san-pham/'.$sp->SP_ID)}}">Xem chi tiết</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div> 
                                        </div>       
                                    </div>    
                        @endsection