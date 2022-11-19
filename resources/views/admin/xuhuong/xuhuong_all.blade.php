 @extends('admin_layout')
 @section('admin_content')

<div class="content-box-header">
 <h1 align="center">Quản lý phong cách</h1>
    <ul class="content-box-tabs">
                            <?php
                            $message = Session::get('message');
                            if($message){
                              echo '<span class="text-alert">',$message,'</span>';
                              Session::put('message',null);
                             }
                              ?>
        <h4><a href="{{URL::to('/add-xuhuong')}}">Thêm xu hướng</a></h4>
    </ul>
</div>
  <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">Danh sách xu hướng
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
                        <th>Tên xu hướng</th>
                        <th>Hình ảnh</th>
                        <th>Trạng thái</th>
                        <th>Năm</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all_xuhuong as $key => $xh_xuhuong)
                      <tr class="odd gradeX">
                        <td>
                          {{$xh_xuhuong->XH_Ten}}
                        </td>
                        <td> <img src="{{asset('public/upload/sanpham/'.$xh_xuhuong->XH_Hinh)}}" height="100" width="100">
                        </td>
                         <td>
                          <?php
                          if($xh_xuhuong->XH_TrangThai==0)
                          {
                           ?>
                              <a href="{{URL::to('/unactive-xuhuong/'.$xh_xuhuong->XH_ID)}}"><span class="mdi mdi-thumb-down" ></span></a>
                          
                         <?php
                          }else
                          {
                         ?> 
                              <a href="{{URL::to('/active-xuhuong/'.$xh_xuhuong->XH_ID)}}"><span class="mdi mdi-thumb-up"></span></a>
                          <?php
                          }
                          ?>
                        </td>
                         <td>
                          {{$xh_xuhuong->XH_Nam}}
                        </td>
                        
                        <td>
                          <a href="{{URL::to('/edit-xuhuong/'.$xh_xuhuong->XH_ID)}}" class="active">
                            <i class="mdi mdi-edit"> </i>
                          </a>
                          </td>
                          <td>
                            <a onclick="return confirm ('Bạn có thực sự muốn xóa xu hướng này!')" href="{{URL::to('/delete-xuhuong/'.$xh_xuhuong->XH_ID)}}" class="active">
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