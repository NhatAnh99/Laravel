<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Áo Ta Sport</title>
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/lib/material-design-icons/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/lib/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/lib/datetimepicker/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/css/app.css')}}" type="text/css">
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div class="be-navbar-header"><a class="navbar-brand" href="{{URL::to('/admin')}}"></a>
          </div>
          <div class="page-title"><span>Admin Áo Ta Sport</span></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{asset('public/backend/img/avatar.png')}}" alt="Avatar"></a>
                <div class="dropdown-menu" role="menu">     
                  <div class="user-info">
                    <div class="user-name">
                      <?php
                      $ten = Session::get('NV_Ten');
                      if($ten)
                      {
                        echo $ten;
                      }
                      ?>
                    </div>
                    <div class="user-position online">Available</div>
                  </div><a class="dropdown-item" href="pages-profile.html"><span class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item" href="#"><span class="icon mdi mdi-settings"></span>Cài đặt</a><a class="dropdown-item" href="admin-logout"><span class="icon mdi mdi-power"></span>Đăng xuất</a>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right be-icons-nav">
              <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a></li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu be-notifications">
                  <li>
                    <div class="title">Thông báo<span class="badge badge-pill">3</span></div>
                    <div class="list">
                      <div class="be-scroller-notifications">
                        <div class="content">
                          <ul>
                            <li class="notification notification-unread"><a href="#">
                                <div class="image"><img src="{{asset('public/backend/img/avatar2.png')}}" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="{{asset('public/backend/img/avatar3.png')}}" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="{{asset('public/backend/img/avatar4.png')}}" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="{{asset('public/backend/img/avatar5.png')}}" alt="Avatar"></div>
                                <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-apps"></span></a>
                <ul class="dropdown-menu be-connections">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">
                          <div class="col"><a class="connection-item" href="#"><img src="{{asset('public/backend/img/github.png')}}" alt="Github"><span>GitHub</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="{{asset('public/backend/img/bitbucket.png')}}" alt="Bitbucket"><span>Bitbucket</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="{{asset('public/backend/img/slack.png')}}" alt="Slack"><span>Slack</span></a></div>
                        </div>
                        <div class="row">
                          <div class="col"><a class="connection-item" href="#"><img src="{{asset('public/backend/img/dribbble.png')}}" alt="Dribbble"><span>Dribbble</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="{{asset('public/backend/img/mail_chimp.png')}}" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="{{asset('public/backend/img/dropbox.png')}}" alt="Dropbox"><span>Dropbox</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">More</a></div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
       @yield('admin_content')
    <script src="{{asset('public/backend/lib/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/jquery-flot/jquery.flot.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/jquery-flot/jquery.flot.pie.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/jquery-flot/jquery.flot.time.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/jquery-flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/jquery-flot/plugins/jquery.flot.orderBars.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/jquery-flot/plugins/curvedLines.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/jquery-flot/plugins/jquery.flot.tooltip.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/jquery.sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/countup/countUp.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/jqvmap/jquery.vmap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>



    <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        App.init();
        App.dashboard();
      
      });
    </script>



     <script type="text/javascript">
      $(document).ready(function()
      {
        fetch_vanchuyen();
        function fetch_vanchuyen()
        {
          var _token = $('input[name="_token"]').val();
          $.ajax({
            url: '{{url('/select-feeship')}}',
            method: 'post',
            data : {_token:_token},
            success:function(data){
              $('#load_vanchuyen').html(data);            }
          });
        }


        $(document).on('blur','.fee_ship_edit',function() {
          var feeship_id = $(this).data('feeship_id');
          var fee_val = $(this).text();
          var _token = $('input[name="_token"]').val();
          $.ajax({
            url: '{{url('/update-vanchuyen')}}',
            method: 'post',
            data : {feeship_id:feeship_id,fee_val:fee_val,_token:_token},
            success:function(data){
              fetch_vanchuyen();
            }
          });
        });


        $('.add_phivanchuyen').click(function() {
          var city = $('.city').val();
          var province = $('.province').val();
          var wards = $('.wards').val();
          var fee_ship = $('.fee_ship').val();
          var _token = $('input[name="_token"]').val();
          $.ajax({
            url: '{{url('/insert-vanchuyen')}}',
            method: 'post',
            data : {city:city,province:province,wards:wards,fee_ship:fee_ship,_token:_token},
            success:function(data){
              fetch_vanchuyen();
            }
          });
        });

        $('.choose').on('change',function() {
          var action = $(this).attr('id');
          var ma_id = $(this).val();
          var _token = $('input[name="_token"]').val();
          var result = '';
          if(action == 'city')
          {
            result = 'province';
          }else{
            result = 'wards';
          }
          $.ajax({
            url: '{{url('/select-vanchuyen')}}',
            method: 'post',
            data : {action:action,ma_id:ma_id,_token:_token},
            success:function(data){
              $('#'+result).html(data);
            }
          });
        });

      });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.add-queue').click(function(){
            var id = $(this).data('id_product');
            var product_id =$('.product_id_' + id).val();
            var product_name =$('.product_name_' + id).val();
            var product_image =$('.product_image_' + id).val();
            var _token = $('input[name="_token"]').val();
             $.ajax({
                 url: '{{url('/product-import-add-queue')}}',
                 method: 'POST',
                 data:{product_id:product_id,product_name:product_name,product_image:product_image,_token:_token},
                 success:function(data){
                    Swal.fire({
                        title: "Thêm thành công",
                        type: "success",
                        showConfirmButton: !1,
                       timer: 500
                    })
                    location.reload();
                 }
             });
         });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.delete-row-queue').click(function(){
            var id = $(this).data('id_product');
            var product_id =$('.product_id_' + id).val();
            var product_session_id =$('.product_session_id_' + id).val();
            var _token = $('input[name="_token"]').val();
             $.ajax({
                 url: '{{url('/product-import-delete-row-queue')}}',
                 method: 'GET',
                 data:{product_id:product_id,product_session_id:product_session_id,_token:_token},
                 success:function(data){
                    Swal.fire({
                        title: "Xóa thành công!",
                        type: "success",
                        showConfirmButton: !1,
                       timer: 500
                        });
                        location.reload();
                }
             });
         });
    });
</script>
<script type="text/javascript">
    $('tbody').delegate('.product_quantity,.product_price','keyup',function(){
        var tr=$(this).parent().parent();
        var quantity=tr.find('.product_quantity').val();
        var price=tr.find('.product_price').val();
        var amount=(quantity*price);
        tr.find('.product_total').val(amount);
        total();
    });
    function total(){
        var total=0;
        $('.product_total').each(function(i,e){
            var amount=$(this).val()-0;
            total +=amount;
        });
        $('.total').html(total+".00 VNĐ");
    }
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.delete-product-import-detail').click(function(){
            swal({
                title: "Bạn có muốn xóa?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                confirmButtonClass: "btn-danger",
                cancelButtonColor: "#d33",
                confirmButtonText: "Xóa!",
                cancelButtonText: "Đóng",
                closeOnConfirm: false,
                closeOnCancel: false
            },function(isConfirm) {
                if(isConfirm){
                    var id = $(this).data('id_product_import');
                    var product_import_id = $('.product_import_id_' + id).val();
                    $.ajax({
                        url: '{{url('/product-import-delete-detail')}}',
                        method: 'GET',
                        data:{product_import_id:product_import_id,_token:_token},
                        success:function(data){
                            swal("success");
                       }
                    });
                }

            })
        });
    });
</script>
<script type="text/javascript">
    $('.comment_approval').click(function(){
        var comment_status = $(this).data('comment_status');
        var comment_id = $(this).data('comment_id');
        var comment_product_id = $(this).attr('id');
        var _token = $('input[name="_token"]').val();
        if(comment_status==0){
            var alert = 'Chưa phê duyệt';
        }else{
            var alert = 'Đã phê duyệt';
        }
        $.ajax({
            url:"{{url('/approval-comment')}}",
            method:"POST",
            data:{comment_status:comment_status,comment_id:comment_id,comment_product_id:comment_product_id,_token:_token},
            success:function(data){
                location.reload();
               $('#notify_comment').html('<span class="text text-alert">'+alert+'</span>');
            }
        });
    });
</script>
  </body>
</html>