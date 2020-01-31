<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="">

    <title>@yield('title')  - ناشتا</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <link rel="icon"  type="image/jpg" sizes="96x96" href="{{url('front/img/structure/logo.png')}}">

    <link rel="stylesheet" href="{{url('/front/css/app.css')}}">
    <link rel="stylesheet/less" type="text/css" href="{{url('/front/css/style.less ')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{url('/front/css/fontawesome/css/all.min.css ')}}">

</head>
<body>

<!-- *************      MENU        ******************  -->
@yield('topnav')
<!-- *************      MENU        ******************  -->

@yield('breadcrumb')

@yield('content')


<!-- *************      FOOTER      ******************  -->
@include('front.down.footer')
<!-- *************      FOOTER      ******************  -->

<!-- *************      SCRIPT      ******************  -->
<script src="{{url('/front/js/app.js')}}"></script>
<!-- *************      SCRIPT      ******************  -->


@yield('script')




</body>
</html>
