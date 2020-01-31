<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>پنل مدیریت ناشتا</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon"  type="image/jpg" sizes="96x96" href="{{url('front/img/structure/logo.png')}}">

    <link rel="stylesheet" href="{{url('/front/css/app.css')}}">
    <link rel="stylesheet" href="{{url('/front/css/fontawesome/css/all.min.css ')}}">
</head>
<body class="direction-rtl">

    @include('back.top.navbar')

    <div id="wrapper">

        @include('back.side.sidebar')

        <!-- Main -->
            <div id="content-wrapper">
                <div class="container-fluid">

                    <!-- Breadcrumbs-->
                    @yield('breadcrumb')
                    <!-- Breadcrumbs-->

                    <div id="maindiv">
                        @yield('content')
                    </div>

                </div>
            </div>
         <!-- Main -->

    </div>



    <!-- Scroll to Top Buton-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Scroll to Top Button-->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true" style="direction:rtl!important;text-align:right;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">از صفحه خارج می شوید؟</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="float:right!important;">×</span>
                    </button>

                </div>
                <div class="modal-body">
                    اگر مطمئن هستید که می خواهید صفحه را ترک کنید روی گزینه خروج کلیک کنید در غیر این صورت گزینه انصراف را
                    فشار دهید.
                </div>
                <div class="modal-footer">

                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-danger bold font-size-14" value="خروج">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Logout Modal-->

    <script src="{{url('/front/js/app.js')}}"></script>
    <script>$(".chosen-select").chosen();</script>

    @yield('script')


</body>
</html>
