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
                                        <!-- <div class="sidebar_widget color">
                                            <h2>Màu sắc</h2>
                                             <div class="widget_color">
                                                <ul>

                                                    <li><a href="{{URL::to('/shop-sanpham-black')}}">Black <span></span></a></li>

                                                    <li><a href="{{URL::to('/shop-sanpham-orange')}}">Orange <span></span></a></li>

                                                    <li> <a href="{{URL::to('/shop-sanpham-blue')}}">Blue <span></span></a></li>

                                                    <li><a href="{{URL::to('/shop-sanpham-yellow')}}">Yellow <span></span></a></li>

                                                    <li><a href="{{URL::to('/shop-sanpham-red')}}">red <span></span></a></li>

                                                    <li><a href="{{URL::to('/shop-sanpham-green')}}">green <span></span></a></li>

                                                </ul>
                                            </div>
                                            
                                        </div>             -->
                                             
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

                                         <div class="col-lg-9 col-md-12">
                                        <!--shop toolbar start-->
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
                                                <div class="col-md-12 mb-35">
                                                    <form class="form-inline" action="{{URL::to('/search-product-filter-customer')}}" method="GET">
                                                        <!-- <div class="form-group col-lg-3 mt-3">
                                                            <select name="search_customer_xuhuong" class="custom-select" id="status-select">
                                                                <option value="" selected="">--Xu hướng--</option>
                                                                @foreach ($xh_xuhuong as $key => $xuhuong)
                                                                    @if(isset($search_filter_customer))
                                                                        @foreach ($search_filter_customer as $key=>$xh)
                                                                            @if($xuhuong->XH_ID==$xh['search_customer_xuhuong'])
                                                                                <option selected value="{{ $xuhuong->XH_ID }}">{{ $xuhuong->XH_Ten }}</option>
                                                                            @else
                                                                            <option value="{{ $xuhuong->XH_ID }}">{{ $xuhuong->XH_Ten }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    @else
                                                                    <option value="{{ $xuhuong->XH_ID }}">{{ $xuhuong->XH_Ten }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div> -->
                                                <div class="form-group col-lg-3 mt-3">
                                                    <select name="search_customer_loaisanpham" class="custom-select" id="status-select">
                                                        <option value="" selected="">--Loại--</option>
                                                        @foreach ($loai_loaisanpham as $key => $pro_type)
                                                            @if(isset($search_filter_customer))
                                                                @foreach ($search_filter_customer as $key=>$type_pro)
                                                                    @if($pro_type->LSP_ID==$type_pro['search_customer_loaisanpham'])
                                                                        <option selected value="{{ $pro_type->LSP_ID }}">{{ $pro_type->LSP_Ten}}</option>
                                                                    @else
                                                                        <option value="{{ $pro_type->LSP_ID }}">{{ $pro_type->LSP_Ten}}</option>
                                                                    @endif
                                                                @endforeach
                                                            @else
                                                            <option value="{{ $pro_type->LSP_ID }}">{{ $pro_type->LSP_Ten}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 mt-3">
                                                    <select name="search_customer_phongcach" class="custom-select" id="status-select">
                                                        <option value="" selected="">--Phong cách--</option>
                                                        @foreach ($pc_phongcach as $key => $phongcach)
                                                            @if(isset($search_filter_customer))
                                                                @foreach ($search_filter_customer as $key=>$pc)
                                                                    @if($phongcach->PC_ID==$pc['search_customer_phongcach'])
                                                                        <option selected value="{{ $phongcach->PC_ID }}">{{ $phongcach->PC_Ten }}</option>
                                                                    @else
                                                                        <option value="{{ $phongcach->PC_ID }}">{{ $phongcach->PC_Ten }}</option>
                                                                    @endif
                                                                @endforeach
                                                            @else
                                                            <option value="{{ $phongcach->PC_ID }}">{{ $phongcach->PC_Ten }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 mt-3">
                                                    <select name="search_customer_gioitinh" class="custom-select" id="status-select">
                                                        <option value="" selected="">--Giới Tính--</option>
                                                        @if(isset($search_filter_customer))
                                                            @foreach ($search_filter_customer as $key=>$gender)
                                                                @if($gender['search_customer_gioitinh']==1)
                                                                    <option selected value="0">Nam</option>
                                                                    <option value="1">Nữ</option>
                                                                @elseif($gender['search_customer_gioitinh']==2)
                                                                    <option value="0">Nam</option>
                                                                    <option selected value="1">Nữ</option>
                                                                @else
                                                                    <option value="0">Nam</option>
                                                                    <option value="1">Nữ</option>
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            <option value="0">Nam</option>
                                                            <option value="1">Nữ</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 mt-3">
                                                    <select name="search_customer_gia" class="custom-select" id="status-select">
                                                        <option value="" selected="">--Giá--</option>
                                                        @if(isset($search_filter_customer))
                                                            @foreach ($search_filter_customer as $key=>$price)
                                                                @if($price['search_customer_gia']==1)
                                                                    <option selected value="1">< 100.000 VNĐ</option>
                                                                    <option value="2">100.000 VNĐ - 200.000 VNĐ</option>
                                                                    <option value="3">200.000 VNĐ - 400.000 VNĐ</option>
                                                                    <option value="4">400.000 VNĐ - 600.000 VNĐ</option>
                                                                    <option value="5">600.000 VNĐ - 800.000 VNĐ</option>
                                                                    <option value="6">Tất Cả</option>
                                                                @elseif($price['search_customer_gia']==2)
                                                                    <option value="1">< 100.000 VNĐ</option>
                                                                    <option selected value="2">100.000 VNĐ - 200.000 VNĐ</option>
                                                                    <option value="3">200.000 VNĐ - 400.000 VNĐ</option>
                                                                    <option value="4">400.000 VNĐ - 600.000 VNĐ</option>
                                                                    <option value="5">600.000 VNĐ - 800.000 VNĐ</option>
                                                                    <option value="6">Tất Cả</option>
                                                                @elseif($price['search_customer_gia']==3)
                                                                    <option value="1">< 100.000 VNĐ</option>
                                                                    <option value="2">100.000 VNĐ - 200.000 VNĐ</option>
                                                                    <option selected value="3">200.000 VNĐ - 400.000 VNĐ</option>
                                                                    <option value="4">400.000 VNĐ - 600.000</option>
                                                                    <option value="5">600.000 VNĐ - 800.000 VNĐ</option>
                                                                    <option value="6">Tất Cả</option>
                                                                @elseif($price['search_customer_gia']==4)
                                                                    <option value="1">< 100.000 VNĐ</option>
                                                                    <option value="2">100.000 VNĐ - 200.000 VNĐ</option>
                                                                    <option value="3">200.000 VNĐ - 400.000 VNĐ</option>
                                                                    <option selected value="4">400.000 VNĐ - 600.000 VNĐ</option>
                                                                    <option value="5">600.000 VNĐ - 800.000 VNĐ</option>
                                                                    <option value="6">Tất Cả</option>
                                                                @elseif($price['search_customer_gia']==5)
                                                                    <option value="1">< 100.000 VNĐ</option>
                                                                    <option value="2">100.000 VNĐ - 200.000 VNĐ</option>
                                                                    <option value="3">200.000 VNĐ - 400.000 VNĐ</option>
                                                                    <option value="4">400.000 VNĐ - 600.000 VNĐ</option>
                                                                    <option selected value="5">600.000 VNĐ - 800.000 VNĐ</option>
                                                                    <option value="6">Tất Cả</option>
                                                                @elseif($price['search_customer_gia']==6)
                                                                    <option value="1">< 100.000 VNĐ</option>
                                                                    <option value="2">100.000 VNĐ - 200.000 VNĐ</option>
                                                                    <option value="3">200.000 VNĐ - 400.000 VNĐ</option>
                                                                    <option value="4">400.000 VNĐ - 600.000 VNĐ</option>
                                                                    <option value="5">600.000 VNĐ - 800.000 VNĐ</option>
                                                                    <option selected value="6">Tất Cả</option>
                                                                @else
                                                                    <option value="1">< 100.000 VNĐ</option>
                                                                    <option value="2">100.000 VNĐ - 200.000 VNĐ</option>
                                                                    <option value="3">200.000 VNĐ - 400.000 VNĐ</option>
                                                                    <option value="4">400.000 VNĐ - 600.000 VNĐ</option>
                                                                    <option value="5">600.000 VNĐ - 800.000 VNĐ</option>
                                                                    <option value="6">Tất Cả</option>
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            <option value="1">< 100.000 VNĐ</option>
                                                            <option value="2">100.000 VNĐ - 200.000 VNĐ</option>
                                                            <option value="3">200.000 VNĐ - 400.000 VNĐ</option>
                                                            <option value="4">400.000 VNĐ - 600.000 VNĐ</option>
                                                            <option value="5">600.000 VNĐ - 800.000 VNĐ</option>
                                                            <option value="6">Tất Cả</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <button type="submit" class="btn btn-danger waves-effect waves-light mt-3 mr-3"><i class="mdi mdi-search-web mr-1"></i>Tìm</button>
                                                    <a href="{{URL::to('/shop-sanpham')}}" class="btn btn-success waves-effect waves-light mt-3"><i class="mdi mdi-search-web mr-1"></i>Tất Cả</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                        
                                        <!--shop toolbar end-->

                                        <!--shop tab product-->
                                        <div class="shop_tab_product">   
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="large" role="tabpanel">
                                                    <div class="row">
                                                        @foreach ($sp_sanpham as $key => $sp)
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