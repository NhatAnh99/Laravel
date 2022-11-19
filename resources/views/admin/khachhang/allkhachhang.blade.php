@extends('admin_layout')
 @section('admin_content')

<div class="content-box-header">
 <h1 align="center">Quản Lý Khách Hàng</h1>
    </div>
  <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">Danh sách Khách Hàng
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
                        <th>Tên</th>
                        <th>Email</th>
                        <th>SDT</th>
                        <th>Địa Chỉ</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($all_khachhang as $key => $sp_khachhang)
                      <tr class="odd gradeX">
                        <td>
                          {{$sp_khachhang->KH_Ten}}
                        </td>
                        <td>
                          {{$sp_khachhang->KH_Email}}
                        </td>
                        <td>{{$sp_khachhang->KH_SDT}}
                        </td>
                        <td>
                          {{$sp_khachhang->KH_DiaChi}}
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