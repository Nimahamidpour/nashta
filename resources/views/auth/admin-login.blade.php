<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon"  type="image/jpg" sizes="96x96" href="{{url('front/img/structure/logo.png')}}">

    <title>صفحه ورود مدیریت بهین سرویس</title>

    <link rel="stylesheet" href="{{url('/front/css/app.css')}}">
    <link rel="stylesheet" href="{{url('/front/css/fontawesome/css/all.min.css ')}}">

</head>
<body class="bg-admin p-5">

<div class="container h-100">
    <div class="d-flex justify-content-center h-100 mt-5">
        <div class="user_card">

            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="{{url('front/img/structure/logo.png')}}" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
               <form method="POST" action="{{ route('admin.login.submit') }}">
                   @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="mobile" class="form-control input_user" value="" placeholder="نام کاربری">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control input_pass" value="" placeholder="کلمه عبور">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox direction-rtl text-right mt-4">
                            <input type="checkbox" class="custom-control-input" id="remmember" name="remmember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remmember">مرا به خاطر بسپار</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="loginadmin" class="btn login_btn">ورود</button>
                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    <a href="#" class="decoration-none text-white">رمز عبور خود را فراموش کرد ام</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{url('/front/js/app.js')}}"></script>
</body>
</html>

