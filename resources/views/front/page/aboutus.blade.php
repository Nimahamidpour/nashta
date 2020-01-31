@extends('front.index')

@section('title')
    {{$aboutus->name}}
@endsection
@section('keywords')
    {{$aboutus->keywords}}
@endsection
@section('description')
    {{$aboutus->shorttxt}}
@endsection
@section('topnav')
    @include('front.top.navbar2')
@endsection
@section('breadcrumb')
    <nav  class="col-12  my-4">
        <ol class="align-center breadcrumb">
            <li class="breadcrumb-item color-main-green bold" aria-current="page">صفحه اصلی -> درباره ناشــــتا </li>
        </ol>
    </nav>
@endsection

@section('content')
    <!-- WELCOME -->
    <section class="direction-ltr bg-white pt-0" id="welcome">
        <div class="container">
            <div class="row mb-4">

                <div class="col-lg-7 col-md-6 text-center bg-light p-4 bg-bt-gold-hvr my-5">
                    <div class="mt-2">
                        <h1 class="font-size-20 font-iran my-4 bold">
                            {{$aboutus->name}}
                        </h1>
                        <div class="text-muted line-35   text-justify direction-rtl">
                            {!! $aboutus->longtext !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 text-center my-5">
                    <img src="{{url($aboutus->img)}}" alt="{{$aboutus->name}}" class="rounded mt-3 " style="height: 320px!important;width: 320px!important;">
                </div>
            </div>
        </div>
    </section>
    <!-- WELCOME -->





@endsection
