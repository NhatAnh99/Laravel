@extends('admin_layout')
 @section('admin_content')

<div class="content-box-header">
 <h1 align="center">Quản lý sản phẩm</h1>
    <ul class="content-box-tabs">
        <h4><a href="{{URL::to('/add-sanpham')}}">Thêm sản phẩm</a></h4>
    </ul>
    </div>
                          
                            <?php
                            $message = Session::get('message');
                            if($message){
                              echo '<span class="text-alert">',$message,'</span>';
                              Session::put('message',null);
                             }
                              ?>
  <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">Danh sách sản phẩm
                  <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-hover table-fw-widget" id="table1">
                    <thead>
                      <tr>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Hình ảnh</th>
                        <th>Mô tả</th>
                        <th>Size</th>
                        <th>Trạng thái</th>
                        <th>Màu sắc</th>
                        <th>Loại</th>
                        <th>Xu hướng</th>
                        <th>Phong cách</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($all_sanpham as $key => $sp_sanpham)
                      <tr class="odd gradeX">
                        <td>
                          {{$sp_sanpham->SP_Ten}}
                        </td>
                        <td>
                          {{$sp_sanpham->SP_Gia}}
                        </td>
                        <td> <img src="{{asset('public/upload/sanpham/'.$sp_sanpham->SP_Hinh)}}" height="100" width="100">
                        </td>
                        <td>{{$sp_sanpham->SP_MoTa}}
                        </td>
                        <td>
                          {{$sp_sanpham->SP_Size}}
                        </td>
                        <td>
                          <?php
                          if($sp_sanpham->SP_TrangThai==0)
                          {
                           ?>
                              <a href="{{URL::to('/unactive-sanpham/'.$sp_sanpham->SP_ID)}}"><span class="mdi mdi-thumb-down" ></span></a>
                          
                         <?php
                          }else
                          {
                         ?> 
                              <a href="{{URL::to('/active-sanpham/'.$sp_sanpham->SP_ID)}}"><span class="mdi mdi-thumb-up"></span></a>
                          <?php
                          }
                          ?>
                        </td>
                         <td>
                          {{$sp_sanpham->SP_MauSac}}
                        </td>
                        <td>
                          {{$sp_sanpham->LSP_Ten}}
                        </td>
                        <td>
                          {{$sp_sanpham->XH_Ten}}
                        </td>
                        <td>
                          {{$sp_sanpham->PC_Ten}}
                        </td>
                        
                        
                        <td>
                          <a href="{{URL::to('/edit-sanpham/'.$sp_sanpham->SP_ID)}}" class="active">
                            <i class="mdi mdi-edit"> </i>
                          </a>
                          </td>
                            <td>
                              <a onclick="return confirm ('Bạn có thực sự muốn xóa sản phẩm này!')" href="{{URL::to('/delete-sanpham/'.$sp_sanpham->SP_ID)}}" class="active">
                              <i class="mdi mdi-delete"> </i>
                            </a>
                          </td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@endsection