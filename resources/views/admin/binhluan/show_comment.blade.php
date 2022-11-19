@extends('admin_layout')
@section('admin_content')  
<div class="content-box-header">
 <h1 align="center">Quản lý bình luận</h1>
    </div>
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <!-- content -->
            <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-12">
                                </div>
                               <!-- end col-->
                            </div> <!-- end row -->
                        </div> <!-- end card-box -->
                    </div><!-- end col-->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" cellspacing="0" id="tickets-table">
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
                                <div id="notify_comment"></div>
                                <thead class="bg-light">
                                <tr>
                                    <th class="font-weight-medium">Duyệt</th>
                                    <th class="font-weight-medium">Tên</th>
                                    <th class="font-weight-medium">Bình Luận</th>
                                    <th class="font-weight-medium">Sản Phẩm</th>
                                    <th class="font-weight-medium">Thao Tác</th>
                                </tr>
                                </thead>
                                <tbody class="font-14">
                                    @foreach ($comment_customer as $key=>$comment)
                                    <tr>
                                        <td>
                                            {{csrf_field()}}
                                            @if($comment->BL_TrangThai==1)
                                                <input type="button" data-comment_status="0" data-comment_id="{{$comment->BL_ID}}" id="{{$comment->CTDDH_ID}}" class="btn btn-danger btn-xs comment_approval" value="Hủy Duyệt" >
                                            @else
                                                <input type="button" data-comment_status="1" data-comment_id="{{$comment->BL_ID}}" id="{{$comment->CTDDH_ID}}" class="btn btn-primary btn-xs comment_approval" value="Duyệt" >
                                            @endif
                                        </td>
                                        <td>
                                            {{ $comment->BL_Ten }}
                                        </td>
                                        <td>
                                            {{ $comment->BL_NoiDung }}
                                        </td>
                                        <td>
                                            {{ $comment->CTDDH_ID }}
                                        </td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                    <a href="{{URL::to('/delete-comment/'.$comment->BL_ID)}}" onclick="return confirm('Xóa bình luận?')"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->
                <nav>
                <ul class="pagination pagination-rounded mb-3">
                    {{ $comment_customer->links('layout.paginationlinks') }}
                </ul>
            </nav>
            <!-- end content -->
            <!-- end page title -->
        </div>
        <!-- container -->
    </div>
    <!-- content -->
    <!-- Footer Start -->
    <!-- end Footer -->
</div>
@endsection
