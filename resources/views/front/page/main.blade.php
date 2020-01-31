@extends('front.index')

@section('title','صفحه اصلی')
@section('description','ناشتا مرکز ارائه صبحانه در تهران')
@section('keywords','صبحانه تلفنی')

@section('topnav')
    @include('front.top.navbar')
@endsection

@section('content')

    <!-- MENU SLIDE -->
    <section class="page-section">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-2 col-lg-3 col-md-3 p-0 d-none d-xl-block d-lg-block d-md-block d-sm-none d-xs-none">
                    <img src="{{url('front/img/structure/side1.png')}}" alt="" class="d-flex"/>
                </div>

                <div class="col-xl-8 col-lg-6 col-md-6 col-sm-9 col-xs-12 mx-auto">
                    <div class="container">
                        <div class="row blog">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">

                                <!-- CAROUSEL -->
                                <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @for($i=0;$i<count($foods->toArray())/3;$i++)
                                            @if($i==0)
                                                <li data-target="#blogCarousel" data-slide-to="{{$i}}"
                                                    class="active"></li>
                                            @else
                                                <li data-target="#blogCarousel" data-slide-to="{{$i}}"></li>
                                            @endif
                                        @endfor
                                    </ol>
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        @php $temp='active'; @endphp
                                        @foreach($foods->chunk(3) as $food)
                                            <div class="carousel-item {{$temp}}">
                                                <div class="row">
                                                    @foreach($food as $food_item)
                                                        <div class="col-md-4">
                                                            <div class="item-box-blog">
                                                                <div class="item-box-blog-image">
                                                                    <!--Image-->
                                                                    <figure><img alt="{{$food_item->name}}"
                                                                                 src="{{url($food_item->img)}}"
                                                                                 class=" border-6"></figure>
                                                                </div>
                                                                <div class="item-box-blog-body">
                                                                    <!--Heading-->
                                                                    <div class="item-box-blog-heading">
                                                                        <a href="#" tabindex="0">
                                                                            <p class="font-size-15 bold">{{$food_item->name}}</p>
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                    @php $temp=''; @endphp

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!--.carousel-inner-->
                                </div>
                                <!-- CAROUSEL -->


                                <div class="row mx-auto">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">


                                        <div id="container1" class="align-center mt-3">
                                            <div class="button1 border-18 bg-main-green" id="button-3">
                                                <div id="circle"></div>
                                                <a href="#" class="font-size-17">سفارش آنلاین</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-3 p-0 d-none d-xl-block d-lg-block d-md-block d-sm-none d-xs-none">
                    <img src="{{url('front/img/structure/slide2.png')}}" alt="" class="img-fluid "/>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SLIDE -->

    <!-- WHY US -->
    <section id="love">
        <div class="container-fluid back-love">
            <div class="row">
                <div class="col-12 mt-5">
                    <h2 class="align-center bold font-rezvan font-size-30 my-5 text-black">چرا همه ناشتا را دوست دارند؟
                        ...</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-2">
                        <div class="love-classic">
                            <div class=" m-40 text-center">
                                <span class="counter fa-num ">
                                     <img src="{{url('front/img/love/keyfiat.png')}}" alt="" class="img-fluid "/>
                                </span>
                            </div>
                            <h3 class="decoration-none love-text my-3 font-size-20 color-main-green bold"> کیفیت
                                بالا</h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-2">
                        <div class="love-classic">
                            <div class=" m-40 text-center">
                                <span class="counter fa-num ">
                                     <img src="{{url('front/img/love/basteh.png')}}" alt="" class="img-fluid "/>
                                </span>
                            </div>
                            <h3 class=" decoration-none love-text my-3 font-size-20 color-main-green bold">بسته بندی
                                مناسب</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-2">
                        <div class="love-classic">
                            <div class="m-40 text-center">
                                <span class="counter fa-num">
                                     <img src="{{url('front/img/love/tabiat.png')}}" alt="" class="img-fluid "/>
                                </span>
                            </div>
                            <h3 class=" decoration-none love-text mt-3 font-size-20 color-main-green bold"> حامی
                                طبیعت</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 direction-ltr">
                <img src="{{url('front/img/love/love.png')}}" alt="" class="d-flex height-200"/>
            </div>
        </div>
    </section>
    <!-- WHY US -->


    <!-- NEWS -->
    <section id="news">
        <!-- TITR PATR -->
        <div class="col-12 mx-auto mt-5">
            <p class="font-rezvan font-size-25 bold align-center mt-5"> جدیدتریـــن اخبــــــــار و مقـــــالات </p>
        </div>
        <!-- TITR PATR -->
        <div class="container cta-100 pt-0">
            <div class="container">
                <div class="row blog">
                    <div class="col-md-12">
                        <div id="newsCarousel" class="carousel slide container-blog mb-5" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @for($i=0;$i<count($news->toArray())/3;$i++)
                                    @if($i==0)
                                        <li data-target="#newsCarousel" data-slide-to="{{$i}}" class="active"></li>
                                    @else
                                        <li data-target="#newsCarousel" data-slide-to="{{$i}}"></li>
                                    @endif
                                @endfor
                            </ol>
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                @php $temp='active'; @endphp
                                @foreach($news->chunk(3) as $group_news)
                                    <div class="carousel-item {{$temp}}">
                                        <div class="row">

                                            @foreach($group_news as $itemnews)
                                                <div class="col-md-4">
                                                    <div class="item-box-news">
                                                        <div class="item-box-news-image mt-3">
                                                            <!--Date-->
                                                            <div class="item-box-news-date bg-blue-ui white">
                                                                <span class="mon fa-num">{{jdate($itemnews->created_at)->format('M Y')}}</span>
                                                            </div>
                                                            <!--Image-->
                                                            <figure>
                                                                <img alt="{{$itemnews->name}}"
                                                                     src="{{url($itemnews->img)}}"
                                                                     class="height-160width-300 rounded">
                                                            </figure>
                                                        </div>
                                                        <div class="item-box-news-body">
                                                            <!--Heading-->
                                                            <div class="item-box-news-heading">
                                                                <a href="#" tabindex="0">
                                                                    <h2 class="font-size-17 bold text-black mt-2">
                                                                        {{$itemnews->name}}
                                                                    </h2>
                                                                </a>
                                                            </div>

                                                            <!--Text-->
                                                            <div class="item-box-news-text align-right">
                                                                <p class="font-size-17 text-justify"
                                                                   style="min-height: 250px;max-height: 250px">
                                                                    {{mb_substr($itemnews->shorttext,0,150)}}
                                                                </p>
                                                            </div>
                                                            <div class="mt-4">
                                                                <a href="{{route('news',$itemnews->slug)}}" tabindex="0"
                                                                   class="btn bg-blue-ui white read">بیشتر بخوانید </a>
                                                            </div>
                                                            <!--Read More Button-->
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            @php $temp=''; @endphp

                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <!--.carousel-inner-->
                        </div>
                        <!--.Carousel-->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- NEWS -->

@endsection
