@extends('front.index')
@section('title')
پیش سفارش صبحانه آنلاین
@endsection
@section('keywords')

@endsection
@section('description')

@endsection

@section('topnav')
    @include('front.top.navbar2')
@endsection

@section('content')


    <!-- Tabs -->
    <section id="tabs">
        <div class="container">

            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-12 col-xs-12 col-sm-12 mx-auto ">
                    <nav>
                        <div class="d-flex flex-nowrap  nav nav-tabs nav-fill " id="nav-tab" role="tablist">
                            @php $temp='active' @endphp
                            @foreach($categories as $category)
                                <a class="nav-item nav-link  border-none {{$temp}}" id="category{{$category->id}}"
                                   data-toggle="tab" href="#subcategory{{$category->id}}" role="tab"
                                   aria-controls="subcategory{{$category->id}}" aria-selected="true">
                                    {{$category->name}}
                                </a>
                                @php $temp='' @endphp
                            @endforeach
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

                        @php $temp='show active' @endphp
                        @foreach($categories as $category)
                            <div class="tab-pane fade  {{$temp}}" id="subcategory{{$category->id}}" role="tabpanel"
                                 aria-labelledby="subcategory{{$category->id}}-tab">
                                <div class="row">
                                    @foreach($foods as $food)
                                        @if($food->category == $category->id)
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 my-2">

                                                <div class="card">
                                                    <img class="card-img-top" src="{{url($food->img)}}"
                                                         alt="Card image cap">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 text-right">
                                                                <h2 class="font-size-17 bold text-right">{{$food->name}}</h2>
                                                            </div>
                                                            <div class="col-4">
                                                                <h3 class="font-size-15 fa-num bold text-left">{{number_format($food->price)}}
                                                                    <span class="font-size-13 bold text-success">تومان</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center d-block mx-auto"
                                                             id="btnaddcart{{$food->id}}">
                                                            <button class="btn btn-danger btn-sm col-8 mx-auto"
                                                                    onclick="addToCart({{$food->id,2}})"><i
                                                                    class="fa fa-fw fa-plus"></i> فزودن
                                                            </button>
                                                        </div>
                                                        <div
                                                            class="row d-none justify-content-center text-center mx-auto"
                                                            id="controller{{$food->id}}">
                                                            <span class="col-1 cursor-pointer" onclick="addToCart({{$food->id,2}})">
                                                                <i class="fa fa-fw fa-square fa-stack-2x text-danger cursor-pointer"></i>
                                                                <i class="fa fa-fw fa-plus fa-stack-1x fa-inverse white-text p-0 mt-1 cursor-pointer"></i>
                                                            </span>
                                                            <span class="col-3 fa-num border-bottom border-danger mt-1"
                                                                  id="counter{{$food->id}}">
                                                                 @if(isset(session()->get('cart')[$food->id]))
                                                                    {{session()->get('cart')[$food->id]['quantity']}}
                                                                @else
                                                                    0
                                                                @endif
                                                             </span>
                                                            <span class="col-1" onclick="minesCart({{$food->id}})">
                                                                <i class="fa fa-fw fa-square fa-stack-2x text-danger"></i>
                                                                <i class="fa fa-fw fa-minus fa-stack-1x fa-inverse white-text p-0 mt-1"></i>
                                                            </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>

                            </div>

                            @php $temp='' @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>






@endsection
