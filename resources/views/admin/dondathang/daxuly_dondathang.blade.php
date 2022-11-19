 @extends('admin_layout')
 @section('admin_content')

<div class="content-box-header">
 <h1 align="center">Quản lý đơn đặt hàng</h1>
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
                <div class="card-header">Đơn đặt hàng đã xử lý
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
                        <th>Ngày đặt</th>
                        <th>Tổng tiền</th>
                        <th>Tình trạng giao</th>
                        <th>Tình trạng thanh toán</th>
                        <th>Trạng thái</th>
                      </tr>
                    </thead>
                    <body>
                     @foreach($all_dondathang as $key => $ddh_dondathang)
                      <tr class="odd gradeX">
                        <td>
                          {{$ddh_dondathang->DDH_NgayDat}}
                        </td>
                        <td>
                          {{$ddh_dondathang->DDH_TongTien}}
                        </td>
                        <td>
                           <?php
                          if($ddh_dondathang->DDH_TinhTrangGiao==0)
                          {
                           ?>
                              Chưa giao hàng
                          
                         <?php
                          }elseif($ddh_dondathang->DDH_TinhTrangGiao==1)
                          {
                         ?> 
                              Đang giao hàng
                          <?php
                          }else
                          {
                         ?> 
                              Đã giao hàng
                          <?php
                          }
                          ?>

                        </td>
                        <td>
                           <?php
                          if($ddh_dondathang->DDH_TinhTrangThanhToan==0)
                          {
                           ?>
                              Chưa thanh toán
                          
                         <?php
                          }else
                          {
                         ?> 
                              Đã thanh toán
                          <?php
                          }
                          ?>
                        </td>
                        <td>
                           <?php
                          if($ddh_dondathang->DDH_TrangThai==0)
                          {
                           ?>
                              Chưa xử lý
                          <?php
                          }elseif($ddh_dondathang->DDH_TrangThai==1)
                          {
                         ?> 
                              Đã xử lý
                          <?php
                          }elseif($ddh_dondathang->DDH_TrangThai==2)
                          {
                         ?> 
                              Đang xử lý
                          <?php
                          }elseif($ddh_dondathang->DDH_TrangThai==3)
                          {
                         ?> 
                              Hoàn tất đơn hàng
                         <?php
                          }else
                          {
                         ?> 
                              Hủy đơn hàng
                          <?php
                          }
                          ?>
                        </td>
                        
                        
                        <td>
                          <a href="{{URL::to('/view-dondathang/'.$ddh_dondathang->DDH_ID)}}" class="active">
                            <i class="mdi mdi-edit"> </i>
                          </a>
                          </td>
                      </tr>
                      @endforeach
                      </body>
                  </table>
                </div>
                
              </div>
            </div>
          </div>

@endsection