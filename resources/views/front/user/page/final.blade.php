@extends('front.user.index')

@section('content')
    <div class="container-fluid">
        @if($cart !="" && $order_details!="" )
            <h1 class="text-danger font-size-15 my-4 bold">بررسی نهایی سفارش</h1>

            <div class="row">
                <label class="font-size-13 bold text-right text-secondary">
                    <i class="fa fa-user color-main-green"></i>
                    اطلاعات کاربری
                </label>
            </div>
            <div class="row mx-auto">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mx-auto">
                    <div class="row mb-4 border rounded  text-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 font-size-13 text-center text-secondary bold my-2">
                            نام : <span class="text-dark">{{Auth::user()->name}} </span></div>
                        <div  class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 font-size-13 text-center text-secondary bold my-2">
                            موبایل‌ : <span class="fa-num text-dark">{{Auth::user()->mobile}}</span></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="font-size-13 bold text-right text-secondary">
                    <i class="fas fa-store color-main-green"></i>
                    سفارش شما
                </label>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 mx-auto">
                    <table class="table table-hover border text-center">
                        @foreach($cart as $cart_item)
                            <tr>
                                <td class="fa-num font-size-13 bold">
                                    <span class="fa-num font-size-13 bold text-danger">{{$cart_item['quantity']}}</span>
                                    عدد
                                    {{$cart_item['name']}}
                                </td>
                                <td class="fa-num font-size-13 bold">
                                    {{number_format($cart_item['quantity'] * $cart_item['price'])}}
                                   &nbsp; <span class="font-size-11 text-success">تومان</span>
                                </td>
                            </tr>
                        @endforeach
                            <tr>
                                <td class="fa-num font-size-13 bold text-secondary">هزینه پیک</td>
                                <td class="fa-num font-size-13 bold text-danger fa-num">
                                    @if($order_details['kind']==2)
                                        {{0}}
                                    @else
                                        {{number_format(4000)}}
                                    @endif
                                    &nbsp;<span class="font-size-11 text-success">تومان</span>
                                </td>
                            </tr>
                        <tr>
                            <td class="fa-num font-size-13 bold text-secondary">جمع کل</td>
                            <td class="fa-num font-size-13 bold text-primary fa-num">
                                @if($order_details['kind']==2)
                                    {{number_format($priceall)}}
                                @else
                                    {{number_format($priceall+4000)}}
                                @endif

                                &nbsp;<span class="font-size-11 text-success">تومان</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <label class="font-size-13 bold text-right text-secondary">
                    <i class="fas fa-shipping-fast color-main-green"></i>
                    @if($order_details['kind']==1)
                        اطلاعات ارسال(<span class="text-danger font-size-11">سفارش آنی</span>)
                    @else
                        اطلاعات ارسال(<span class="text-danger font-size-11">پیش سفارش</span>)
                    @endif

                </label>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 mx-auto">
                    <table class="table table-hover border text-center">
                            <tr>
                                <td class="fa-num font-size-13 bold">
                                    آدرس
                                </td>
                                <td class="fa-num font-size-11 bold">
                                    {{$order_details['address']}}
                                </td>
                            </tr>
                            <tr>
                                <td class="fa-num font-size-13 bold">
                                    تاریخ
                                </td>
                                <td class="fa-num font-size-13 bold direction-ltr">
                                    {{jdate($order_details['date'])->format('Y / m / d - %A')}}

                                </td>
                            </tr>
                            <tr>
                                <td class="fa-num font-size-13 bold">
                                    ساعت
                                </td>
                                <td class="fa-num font-size-13 bold direction-ltr">
                                    @if($order_details['kind']==1)
                                        {{$order_details['time']}}
                                    @else
                                       {{$order_details['time']}}
                                    @endif
                                </td>
                            </tr>

                    </table>
                </div>
            </div>

        <div class="row mx-auto">
            <form action="{{route('user-panel-buy')}}" method="post" class="mx-auto">
                @csrf
                <input type="submit" class="btn btn-success mt-5 mx-auto" style="width: 200px" value="پرداخت"/>
            </form>
        </div>


        @endif
    </div>
@endsection
