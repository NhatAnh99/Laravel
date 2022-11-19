 @extends('admin_layout')
 @section('admin_content')

<div class="content-box-header">
 <h1 align="center">Quản lý nhà cung cấp</h1>
    <ul class="content-box-tabs">
                            <?php
                            $message = Session::get('message');
                            if($message){
                              echo '<span class="text-alert">',$message,'</span>';
                              Session::put('message',null);
                             }
                              ?>
        <h4><a href="{{URL::to('/add-nhacungcap')}}">Thêm nhà cung cấp</a></h4>
    </ul>
</div>
  <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">Danh sách nhà cung cấp
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
                        <th>Tên nhà cung cấp</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Hình ảnh</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all_nhacungcap as $key => $ncc_nhacungcap)
                      <tr class="odd gradeX">
                        <td>
                          {{$ncc_nhacungcap->NCC_Ten}}
                        </td>
                         <td>
                          {{$ncc_nhacungcap->NCC_SDT}}
                        </td>
                         <td>
                          {{$ncc_nhacungcap->NCC_Email}}
                        </td>
                         <td> <img src="{{asset('public/upload/sanpham/'.$ncc_nhacungcap->NCC_Hinh)}}" height="100" width="100">
                        </td>
                        <td>
                          <a href="{{URL::to('/edit-nhacungcap/'.$ncc_nhacungcap->NCC_ID)}}" class="active">
                            <i class="mdi mdi-edit"> </i>
                          </a>
                          </td>
                          <td>
                            <a onclick="return confirm ('Bạn có thực sự muốn xóa nhà cung cấp này!')" href="{{URL::to('/delete-nhacungcap/'.$ncc_nhacungcap->NCC_ID)}}" class="active">
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