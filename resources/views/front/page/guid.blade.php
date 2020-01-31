@extends('front.index')

@section('title')
   راهنمای سفارش از ناشتا
@endsection
@section('keywords')
    سفارش صبحانه انلاین،سفارش صبحانه تلفنی در تهران،سفارش صبحانه در تهران،صبحانه ناشتا،
@endsection
@section('description')
    صبحانه ناشتا بهترین و سریع ترین صبحانه انلاین در تهران
@endsection
@section('topnav')
    @include('front.top.navbar2')
@endsection
@section('breadcrumb')
    <nav  class="col-12  my-4">
        <ol class="align-center breadcrumb">
            <li class="breadcrumb-item color-main-green bold" aria-current="page">صفحه اصلی ->راهنمای سفارش</li>
        </ol>
    </nav>
@endsection

@section('content')
    <!-- WELCOME -->
    <section class="direction-rtl bg-white pt-0" id="welcome">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-right bg-light p-4 bg-bt-gold-hvr my-5">
                    <div class="mt-2">
                        <h2 class="font-size-20 my-4 bold">
                            {{$aboutus->name}}
                        </h2>
                        <p class="text-muted line-35 text-justify">
                            {!! $aboutus->guid !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WELCOME -->

@endsection
