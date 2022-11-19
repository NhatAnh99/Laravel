                        @extends('welcome')
                        @section('content') 

                            <div class="new_product_area product_two">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="block_title">
                                        <h3>  Sản phẩm mới </h3>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="single_p_active owl-carousel">
                                        @foreach($sp_sanpham as $key => $sp)
                                        <div class="col-lg-3">
                                                            <div class="single_product">
                                                                <div class="product_thumb">
                                                                   <a href="{{URL::to('/chi-tiet-san-pham/'.$sp->SP_ID)}}"><img id="wishlist_viewed_product_image{{ $sp->SP_ID }}" src="{{URL::to('public/upload/sanpham/'.$sp->SP_Hinh)}}" alt=""></a> 
                                                                </div>
                                                                <div class="product_content">
                                                                    <span class="product_price">{{number_format($sp->SP_Gia).' '.'VND'}}</span>
                                                                    <h3 class="product_title"><a href="single-product.html">{{$sp->SP_Ten}}</a></h3>
                                                                </div>
                                                                <div class="product_info">
                                                                    <ul>
                                                                        <input type="hidden" value="{{ $sp->SP_Ten }}" id="wishlist_viewed_product_name{{ $sp->SP_ID }}">
                                                                        <input type="hidden" value="{{number_format($sp->SP_Gia,0,',','.').' VNĐ' }}" id="wishlist_viewed_product_price{{ $sp->SP_ID }}">
                                                                        <li><a type="button" onclick="add_wistlist(this.id);" id="{{ $sp->SP_ID }}" title=" Add to Wishlist ">Yêu Thích</a></li>
                                                                        <li><a class="views-product-detail" data-views_product_id="{{$sp->SP_ID}}" id="wishlist_viewed_product_url{{ $sp->SP_ID }}"href="{{URL::to('/chi-tiet-san-pham/'.$sp->SP_ID)}}"title="Quick view">Chi Tiết</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                        @endforeach
                                    </div> 
                                </div>      
                            </div> 
                            <!--new product area start--> 

@endsection