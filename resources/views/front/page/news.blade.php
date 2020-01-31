@extends('front.index')

@section('title')
    {{$news->name}}
@endsection

@section('description')
    {{$news->shorttext}}
@endsection

@section('keywords')
    {{$news->keywords}}
@endsection

@section('topnav')
    @include('front.top.navbar2')
@endsection

@section('breadcrumb')
    <nav  class="col-12  my-4">
        <ol class="align-center breadcrumb">
            <li class="breadcrumb-item color-main-green bold" aria-current="page">صفحه اصلی -> اخبار -> {{$news->name}} </li>
        </ol>
    </nav>
@endsection
@section('content')
    <!-- WELCOME -->
    <section class=" bg-white pt-0 " id="welcome">
        <div class="container-fluid direction-ltr">
            <div class="row">

                <!-- SHOW NEWS -->
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 p-5 ">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <img src="{{url($news->img)}}" class="card-img height-200width-250 mt-3  rounded"
                                 alt="{{$news->name}}">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 direction-rtl">
                            <!-- SUBJECT -->
                            <h1 class="text-right text-dark mt-3 font-size-17 bold fa-num">
                                {{$news->name}}
                            </h1>
                            <!-- SUBJECT -->
                            <!-- TEXT -->
                            <div class=" text-dark  line-45 font-size-15 fa-num text-justify">
                                {!! $news->longtext !!}
                            </div>
                            <!-- TEXT -->
                        </div>


                    </div>
                </div>
                <!-- SHOW NEWS -->

                <!-- OTHER NEWS -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 pt-5">
                    <div class="bg-white">
                        <div class="row direction-rtl">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

                                <ul class="list-group text-right mt-3">
                                    <li class="list-group-item bold font-rezvan font-size-19">آخرین اخبار</li>

                                    @foreach($other_news as $other_news_item)
                                        <li class="list-group-item">
                                            <a class="decoration-none text-muted bold fa-num font-size-15"
                                               href="{{route('news',$other_news_item->slug)}}">
                                                <i class="far fa-newspaper text-orange"></i>
                                                {{$other_news_item->name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- OTHER NEWS -->

            </div>
        </div>
    </section>
    <!-- WELCOME -->

@endsection
