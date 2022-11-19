<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('public/backend/img/avatar-150.png')}}">
    <title>Áo Ta Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/lib/material-design-icons/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/css/app.css')}}" type="text/css">
  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login be-signup">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container sign-up">
            <div class="card card-border-color card-border-color-primary">
              <!-- <div class="card-header"><img class="logo-img" src="{{asset('public/backend/img/avatar-150.png')}}" alt="logo" width="100" height="11 0"><span class="splash-description">Vui lòng nhập thông tin người dùng.</span></div> -->
              <div class="card-body">
              <?php
                $message = Session::get('message');
                if($message){
                  echo '<span class="text-alert">',$message,'</span>';
                  Session::put('message',null);
                }
              ?>
                <form action="{{URL::to('/admin-admin')}}" method="post">
                  {{csrf_field()}}
                  <span class="splash-title pb-4">Đăng nhập</span>
                  <div class="form-group">
                    <input class="form-control" type="email" name="NV_TaiKhoan" required="" placeholder="Tài khoản">
                  </div>
                  <div class="form-group">
                    <input class="form-control"  type="password" name="NV_MatKhau" required="" placeholder="Mật khẩu">
                  </div>
                  <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary btn-xl" type="submit">Đăng nhập</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('public/backend/lib/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/js/app.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        App.init();
      });
      
    </script>
  </body>
</html>