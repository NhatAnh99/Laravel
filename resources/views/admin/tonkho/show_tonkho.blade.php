 @extends('admin_layout')
 @section('admin_content')

<div class="content-box-header">
 <h1 align="center">Quản lý sản phẩm tồn kho</h1>
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
                        <th>Hình ảnh</th>
                        <th>Số lượng đã bán</th>
                        <th>Số lượng tồn kho</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($all_sanpham_tonkho as $key => $sp_tonkho)
                      <tr class="odd gradeX">
                        <td>
                          {{$sp_tonkho->SP_Ten}}
                        </td>
                        <td> <img src="{{asset('public/upload/sanpham/'.$sp_sanpham->SP_Hinh)}}" height="100" width="100">
                        </td>
                        <td>{{$sp_tonkho->TK_SoLuongDaBan}}
                        </td>
                        <td>
                          {{$sp_tonkho->TK_SoLuongTon}}
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