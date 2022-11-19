 @extends('welcome')
 @section('content')
 <!--product wrapper start-->
                        @foreach($chitiet_sanpham as $key =>$value)
                        <div class="product_details">
                            <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="product_tab fix">  
                                            <div class="tab-content produc_tab_c">
                                                <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                                                    <div class="modal_img">
                                                        <a href="#"><img src="{{URL::to('public/upload/sanpham/'.$value->SP_Hinh)}}" alt=""></a>
                                                        <div class="img_icone">
                                                           <img src="{{asset('public/frontend/img/cart/span-new.png')}}" alt="">
                                                       </div>
                                                        <div class="view_img">
                                                            <a class="large_view" href="{{asset('public/upload/sanpham/'.$value->SP_Hinh)}}"><i class="fa fa-search-plus"></i></a>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="product_d_right">
                                            <h1>{{$value->SP_Ten}}</h1>
                                             <div class="product_ratting mb-10">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <!-- <li><a href="#"> Write a review </a></li> -->
                                                </ul>
                                            </div>
                                            <form action="{{URL::to('/save-giohang')}}" method="post" >
                                                {{csrf_field()}}
                                            <div class="content_price mb-15">
                                                <span>{{number_format($value->SP_Gia).' '.'VND'}}</span>
                                                
                                            </div>
                                            <div class="box_quantity mb-20">
                                                <form action="#">
                                                    <label>Số lượng</label>
                                                    <input name="sluong" min="1" max="100" value="1" type="number">
                                                </form>
                                                <form>
                                                    {{csrf_field()}}
                                                    <input type="hidden" value="{{$value->SP_ID}}" class="sanpham_id_{{$value->SP_ID}}">
                                                    <input type="hidden" value="{{$value->SP_Ten}}" class="sanpham_ten_{{$value->SP_ID}}">
                                                    <input type="hidden" value="{{$value->SP_Gia}}" class="sanpham_gia_{{$value->SP_ID}}">
                                                    <input type="hidden" value="{{$value->SP_Hinh}}" class="sanpham_hinh_{{$value->SP_ID}}">
                                                    <input type="hidden" value="1" class="sanpham_soluong_{{$value->SP_ID}}">
                                                <input name="sanphamid_hidden" type="hidden" value="{{$value->SP_ID}}"> 
                                                <button type="button" data-id_sanpham="{{ $value->SP_ID}}" class="add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>

                                                </form>
                                                
                                                
                                                

                                            </div>
                                            </form>
                                            <div class="mb-20 col-md-4">
                                            <label for="group_1" class="col-4"><h4>Size:</h4></label>
                                            <select name="size_sanpham" class="form-control" id="group_1">
                                                        <option value="0">S </option>
                                                        <option value="1">M </option>
                                                        <option value="2">L </option>
                                                        <option value="3">XL </option>
                                                        <!-- <option value="4">38 </option>
                                                        <option value="5">39 </option>
                                                        <option value="6">40 </option>
                                                        <option value="7">41</option>
                                                        <option value="8">42</option> 
                                                        <option value="9">One Size</option>-->
                                            </select>
                                            </div>
                                         <!-- <div class="sidebar_widget color">
                                                <h2>Màu sắc</h2>
                                                 <div class="widget_color">
                                                    <ul>
                                                        <li><a href="#"></a></li>
                                                        <li><a href="#"></a></li>
                                                        <li> <a href="#"></a></li>
                                                        <li><a href="#"></a></li>
                                                        <li><a href="#"></a></li>
                                                        <li><a href="#"></a></li>
                                                        <li> <a href="#"></a></li>
                                                        <li><a href="#"></a></li>
                                                    </ul>
                                                </div>
                                            </div>                  -->

                                            <div class="product_stock mb-20">
                                               <p>299 items</p>
                                                <span> In stock </span>
                                            </div>
                                            <div class="wishlist-share">
                                                <h4>Share on:</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                                </ul>      
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!--product details end-->
                        @endforeach

                        <!--product info start-->
                        <div class="product_d_info">
                            <div class="row">
                                <div class="col-12">
                                    <div class="product_d_inner">   
                                        <div class="product_info_button">    
                                            <ul class="nav" role="tablist">
                                                <li>
                                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Mô tả</a>
                                                </li>
                                                <li>
                                                     <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Thông tin sản phẩm</a>
                                                </li>
                                                <li>
                                                   <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Bình luận</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                                <div class="product_info_content">
                                                    <p>{{$value->SP_MoTa}}</p>
                                                </div>    
                                            </div>

                                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                                <div class="product_d_table">
                                                   <form action="#">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="first_child">Loại sản phẩm</td>
                                                                    <td>{{$value->LSP_Ten}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="first_child">Tên sản phẩm</td>
                                                                    <td>{{$value->SP_Ten}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="first_child">Size</td>
                                                                    <td>{{$value->SP_Size}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="first_child">Màu sắc</td>
                                                                    @if($value->SP_MauSac==0)
                                                                    <td>Màu xanh</td>
                                                                    @elseif($value->SP_MauSac==1)
                                                                    <td>Màu vàng</td>
                                                                    @elseif($value->SP_MauSac==2)
                                                                    <td>Màu cam</td>
                                                                    @elseif($value->SP_MauSac==3)
                                                                    <td>Màu đen</td>
                                                                    @elseif($value->SP_MauSac==4)
                                                                    <td>Màu hồng</td>
                                                                    @elseif($value->SP_MauSac==5)
                                                                    <td>Màu xanh lá</td>
                                                                    @elseif($value->SP_MauSac==6)
                                                                    <td>Màu đỏ</td>
                                                                    @else
                                                                    <td>Màu trắng</td>
                                                                    @endif
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td class="first_child">Xu hướng</td>
                                                                    <td>{{$value->XH_Ten}}</td> -->
                                                                </tr>
                                                                <tr>
                                                                    <td class="first_child">Phong cách</td>
                                                                    <td>{{$value->PC_Ten}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>   
                                            </div>
                                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                                <div class="product_review_form">
                                                     @if(session()->has('message'))
                                                        <div class="alert alert-success">
                                                            {!! session()->get('message') !!}
                                                            {!! session()->forget('message') !!}
                                                        </div>
                                                    @elseif(session()->has('error'))
                                                        <div class="alert alert-danger">
                                                            {!! session()->get('error') !!}
                                                            {!! session()->forget('error') !!}
                                                        </div>
                                                    @endif
                                                    <form action="{{URL::to('/post-comment-customer')}}" method="POST">
                                                        {{csrf_field()}}
                                                        <div class="product_review_form rmp">
                                                            <h2>Bình luận sản phẩm</h2>
                                                            <input type="hidden" value="{{ $value->SP_ID }}" name="product_id" class="product_id" >
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <label for="author">Tên</label>
                                                                    <input id="review-name" class="review_name" name="review_name" required="" type="text">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="review_comment">Nội dung </label>
                                                                    <textarea name="review_comment" class="review_comment" required="" id="review-comment"></textarea>
                                                                </div>
                                                                <div class="rate-error" align="center"></div>
                                                            </div>
                                                            <button type="submit">Bình Luận</button>
                                                        </div>
                                                    </form> 
                                                    <hr>
                                                    <form>
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="comment_product_id" class="comment_product_id" value="{{$value->SP_ID}}">
                                                        <div id="comment_show">
                                                            @foreach ($comment_customer as $key=>$comment )
                                                                <div class="product_info_inner ">
                                                                    <div class="product_ratting mb-10 col-md-6">
                                                                        <div class="col-md-2">
                                                                            <img width="100%" src="{{URL::asset('public/backend/img/avatar.png')}}" class="img img-responsive img-thumbnail comment-img">
                                                                        </div>
                                                                        <br>
                                                                        <div col-md-4>
                                                                            <strong>{{ $comment->BL_Ten }}</strong>
                                                                            <p>{{ $comment->BL_NoiDung }}</p>
                                                                        </div>
                                                                    </div>
                                                                    &emsp;&emsp;
                                                                    @foreach ($comment_admin as $k=>$ad_comment)
                                                                        @if($ad_comment->BL_PhanHoi==$comment->BL_ID)
                                                                            <div class="col-md-6">
                                                                                <div class="product_demo">
                                                                                    <div class="col-md-2">
                                                                                        <img width="70%" src="{{URL::asset('public/backend/img/avatar.png')}}" class="img img-responsive img-thumbnail comment-img">
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <strong>
                                                                                            @if($ad_comment->NV_ID)
                                                                                            Admin
                                                                                            @else
                                                                                            {{ $comment->BL_Ten }}
                                                                                            @endif
                                                                                        </strong>
                                                                                        <p>{{ $ad_comment->BL_NoiDung }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </form>
                                                </div>     
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                            </div>
                        </div>  
                        <!--product info end-->


                        <!--new product area start-->
                        <div class="new_product_area product_page">
                            <div class="row">
                                <div class="col-12">
                                    <div class="block_title">
                                    <h3>Sản phẩm liên quan</h3>
                                </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="single_p_active owl-carousel">
                                    @foreach($lienquan_sanpham as $key => $lienquan)
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                           <a href="{{URL::to('/chi-tiet-san-pham/'.$lienquan->SP_ID)}}"><img id="wishlist_viewed_product_image{{ $lienquan->SP_ID }}" src="{{URL::to('public/upload/sanpham/'.$lienquan->SP_Hinh)}}" alt=""></a>
                                                           <div class="img_icone">
                                                               <img src="{{URL::to('public/upload/sanpham/'.$lienquan->SP_Hinh)}}" alt="">
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="gia_sanpham">{{number_format($lienquan->SP_Gia).' '.'VND'}}</span>
                                                            <h3 class="product_title"><a href="single-product.html">{{$lienquan->SP_Ten}}</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                        <input type="hidden" value="{{ $lienquan->SP_Ten }}" id="wishlist_viewed_product_name{{ $lienquan->SP_ID }}">
                                                                        <input type="hidden" value="{{number_format($lienquan->SP_Gia,0,',','.').' VNĐ' }}" id="wishlist_viewed_product_price{{ $lienquan->SP_ID }}">
                                                                        <li><a type="button" onclick="add_wistlist(this.id);" id="{{ $lienquan->SP_ID }}" title=" Add to Wishlist ">Thêm Yêu Thích</a></li>
                                                                        <li><a class="views-product-detail" data-views_product_id="{{$lienquan->SP_ID}}" id="wishlist_viewed_product_url{{ $lienquan->SP_ID }}"href="{{URL::to('/chi-tiet-san-pham/'.$lienquan->SP_ID)}}"title="Quick view">Chi Tiết</a></li>
                                                                    </ul>
                                                        </div>
                                                    </div>
                                    </div>
                                    @endforeach
                                </div> 
                            </div>      
                        </div> 
                        <!--new product area start-->  


                        <!--new product area start-->
                        <!-- <div class="new_product_area product_page">
                            <div class="row">
                                <div class="col-12">
                                    <div class="block_title">
                                    <h3>Sản phẩm khác</h3>
                                </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="single_p_active owl-carousel">
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                               <a href="single-product.html"><img src="assets/img/product/product6.jpg" alt=""></a> 
                                               <div class="img_icone">
                                                   <img src="assets/img/cart/span-new.png" alt="">
                                               </div>
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">$50.00</span>
                                                <h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>
                                            </div>
                                            <div class="product_info">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>      
                        </div>  -->
                        <!--new product area start-->  
@endsection