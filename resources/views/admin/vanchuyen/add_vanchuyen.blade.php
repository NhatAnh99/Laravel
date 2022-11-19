@extends('admin_layout')
@section('admin_content')
 <div id="page-wrapper">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Thêm phí vận chuyển</h1>
                            <?php
                            $message = Session::get('message');
                            if($message){
                              echo '<span class="text-alert">',$message,'</span>';
                              Session::put('message',null);
                             }
                              ?>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form >
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Chọn thành phố</label>
                                                    <select class="form-control choose city" name="city" id="city">
                                                        <option value="">--Chọn tỉnh thành phố-- </option>
                                                        @foreach($city as $key => $tp)
                                                        <option value="{{$tp->TP_ID}}">{{$tp->TP_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Chọn quận huyện</label>
                                                    <select class="form-control choose province" name="province" id="province">
                                                        <option value="">--Chọn quận huyện-- </option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Chọn xã phường</label>
                                                    <select class="form-control wards" name="wards" id="wards">

                                                        <option value="">--Chọn phường xã thị trấn--</option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="form-group" >
                                                    <label>Phí ship</label>
                                                    <input class="form-control fee_ship" name="fee_ship">
                                                </div>
                                                <button type="button" name="add_phivanchuyen" class="btn btn-space btn-primary add_phivanchuyen">Thêm phí vận chuyển</button>
                                            </form>
                                        </div>
                                        <div id="load_vanchuyen">
                                            
                                        </div>
@endsection