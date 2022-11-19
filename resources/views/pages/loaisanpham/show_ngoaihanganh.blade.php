@extends('welcome')
@section('content')

 <!--breadcrumbs area start-->
                        <div class="breadcrumbs_area">
                            <div class="row">
                                    <div class="col-12">
                                        <div class="breadcrumb_content">
                                            <ul>
                                                <li><a href="index.html">home</a></li>
                                                <li><i class="fa fa-angle-right"></i></li>
                                                <li>shop</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!--breadcrumbs area end-->

                        <!--pos home section-->
                        <div class=" pos_home_section">
                            <div class="row pos_home">
                                    <div class="col-lg-3 col-md-12">
                                       <!--layere categorie"-->
                                        <!--layere categorie end-->

                                        <!--color area start-->  
                                        <div class="sidebar_widget color">
                                            <h2>Màu sắc</h2>
                                             <div class="widget_color">
                                                <ul>

                                                    <li><a href="#">Black <span>(10)</span></a></li>

                                                    <li><a href="#">Orange <span>(12)</span></a></li>

                                                    <li> <a href="#">Blue <span>(14)</span></a></li>

                                                    <li><a href="#">Yellow <span>(15)</span></a></li>

                                                    <li><a href="#">pink <span>(16)</span></a></li>

                                                    <li><a href="#">green <span>(11)</span></a></li>

                                                </ul>
                                            </div>
                                        </div>                 
                                        <!--color area end--> 

                                        <!--price slider start-->                                     
                                                     
                                        <!--price slider end-->

                                        <!--wishlist block start-->
                                        <div class="sidebar_widget wishlist mb-30">
                                            <div class="block_title">
                                                <h3><a href="#">Yêu Thích</a></h3>
                                            </div>
                                            <div id="list_row_wishlist">
                                            </div>

                                            <div class="block_content">
                                                <p id="count_product_wishlist">
                                                </p>
                                                <a href="{{URL::to('/yeuthich-sanpham')}}">» Yêu Thích</a>
                                            </div>
                                        </div>
                                        <!--wishlist block end-->

                                        <!--popular tags area-->
                                        <!--popular tags end-->

                                        <!--newsletter block start-->
                                        <!--newsletter block end--> 

                                        <!--special product start-->
                                        
                                        <!--special product end-->


                                    </div>
                                    <div class="col-lg-9 col-md-12">
                                        <!--banner slider start-->
                                        <div class="banner_slider mb-35">
                                            <img src="assets/img/banner/bannner10.jpg" alt="">
                                        </div> 
                                        <!--banner slider start-->

                                        <!--shop toolbar start-->
                                        
                                        <!--shop toolbar end-->

                                        <!--shop tab product-->
                                        <div class="shop_tab_product">   
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="large" role="tabpanel">
                                                    <div class="row">
                                                        @foreach ($sp_sanpham as $key => $sp)
                                                        @if($sp->SP_Ten)
                                                        <div class="col-lg-4 col-md-6">
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
                                                                        <li><a type="button" onclick="add_wistlist(this.id);" id="{{ $sp->SP_ID }}" title=" Add to Wishlist ">Thêm Yêu Thích</a></li>
                                                                        <li><a class="views-product-detail" data-views_product_id="{{$sp->SP_ID}}" id="wishlist_viewed_product_url{{ $sp->SP_ID }}"href="{{URL::to('/chi-tiet-san-pham/'.$sp->SP_ID)}}"title="Quick view">Chi Tiết</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>  
                                                </div>

                                            </div>
                                        </div>    
                                        <!--shop tab product end-->

                                        <!--pagination style start--> 
                                       <div class="pagination_style">
                                            <div class="page_number">
                                                <ul>
                                                    <li> {{ $sp_sanpham->links('layout.paginationlinks') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--pagination style end--> 
                                        
@endsection