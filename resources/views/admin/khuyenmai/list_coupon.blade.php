 @extends('admin_layout')
 @section('admin_content')

<div class="content-box-header">
 <h1 align="center">Quản lý khuyến mãi</h1>
    <ul class="content-box-tabs">
        <h4><a href="{{URL::to('/insert-coupon')}}">Thêm khuyến mãi</a></h4>
        <!-- <h3><a href="{{URL::to('/send-coupon')}}"class="btn btn-default">Gửi mã giám giá</a></h3> -->
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
                <div class="card-header">Danh sách mã khuyến mãi
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
                      <th>Mã khuyến mãi</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Phương thức</th>
                        <th>Giá trị</th>
                        <th>Ngày khuyến mãi</th>
                        <th>Số ngày khuyến mãi</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($coupon as $key => $khuyenmai)
                      <tr class="odd gradeX">
                      <td>
                          {{$khuyenmai->KM_ID}}
                        </td>
                        <td>
                          {{$khuyenmai->KM_TieuDe}}
                        </td>
                        <td>
                          {{$khuyenmai->KM_NoiDung}}
                        </td>
                        <td>
                          <?php
                          if($khuyenmai->KM_PhuongThuc==1)
                          {
                           ?>
                             Giảm theo %
                          
                         <?php
                          }elseif($khuyenmai->KM_PhuongThuc==2)
                          {
                         ?> 
                            Giảm theo VND
                          <?php
                        }else{
                          ?>
                            Quà tặng
                          
                          <?php
                          }
                          ?>
                        </td>
                        <td>
                          {{number_format($khuyenmai->KM_GiaTri)}}
                        </td>
                        <td>
                          {{$khuyenmai->KM_Ngay}}
                        </td>
                        <td>
                          {{$khuyenmai->KM_SoNgay}}
                        </td>
                            <td>
                              <a onclick="return confirm ('Bạn có thực sự muốn xóa mã giảm giá này!')" href="{{URL::to('/delete-coupon/'.$khuyenmai->KM_ID)}}" class="active">
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