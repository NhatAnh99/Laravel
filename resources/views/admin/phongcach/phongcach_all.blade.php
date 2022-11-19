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
        <h4><a href="{{URL::to('/add-phongcach')}}">Thêm phong cách</a></h4>
    </ul>
</div>
  <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">Danh sách phong cách
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
                        <th>Tên phong cách</th>
                        <th>Hình ảnh</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all_phongcach as $key => $pc_phongcach)
                      <tr class="odd gradeX">
                        <td>
                          {{$pc_phongcach->PC_Ten}}
                        </td>
                        <td> <img src="{{asset('public/upload/sanpham/'.$pc_phongcach->PC_Hinh)}}" height="100" width="100">
                        </td>
                        
                        <td>
                          <a href="{{URL::to('/edit-phongcach/'.$pc_phongcach->PC_ID)}}" class="active">
                            <i class="mdi mdi-edit"> </i>
                          </a>
                          </td>
                          <td>
                            <a onclick="return confirm ('Bạn có thực sự muốn xóa phong cách này!')" href="{{URL::to('/delete-phongcach/'.$pc_phongcach->PC_ID)}}" class="active">
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