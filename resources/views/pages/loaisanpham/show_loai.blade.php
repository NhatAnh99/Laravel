                         @extends('welcome')
                         @section('content')    
                              <!--new product area start-->
                                 <div class="new_product_area">
                                     <div class="block_title">
                                        @foreach($lsp_ten as $key => $ten)
                                            <h3>{{$ten->LSP_Ten}}</h3>
                                        @endforeach
                                        </div>
                                        <div class="row">
                                            <div class="product_active owl-carousel">
                                                @foreach($lsp_by_id as $key => $sp)
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="{{URL::to('/chi-tiet-san-pham/'.$sp->SP_ID)}}"><img id="wishlist_viewed_product_image{{ $sp->SP_ID }}" src="{{URL::to('public/upload/sanpham/'.$sp->SP_Hinh)}}" alt=""></a>
                                                           <div class="img_icone">
                                                               <img src="{{URL::to('public/upload/sanpham/'.$sp->SP_Hinh)}}" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="gia_sanpham">{{number_format($sp->SP_Gia).' '.'VND'}}</span>
                                                            <h3 class="product_title"><a href="single-product.html">{{$sp->SP_Ten}}</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                        <input type="hidden" value="{{ $sp->SP_Ten }}" id="wishlist_viewed_product_name{{ $sp->SP_ID }}">
                                                                        <input type="hidden" value="{{number_format($sp->SP_Gia,0,',','.').' VNĐ' }}" id="wishlist_viewed_product_price{{ $sp->SP_ID }}">
                                                                        <li><a type="button" onclick="add_wistlist(this.id);" id="{{ $sp->SP_ID }}" title=" Add to Wishlist ">Thêm Yêu Thích</a></li>
                                                                        <li><a class="views-product-detail" data-views_product_id="{{$sp->SP_ID}}" id="wishlist_viewed_product_url{{ $sp->SP_ID }}"href="{{URL::to('/chi-tiet-san-pham/'.$sp->SP_ID)}}"title="Quick view">Chi Tiết</a></li>
                                                                    </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div> 
                                        </div>       
                                    </div> 
                                    @endsection