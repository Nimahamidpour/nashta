@extends('back.index')

@section('content')
    <div class="container-fluid">
        <h1 class="text-danger font-size-15 my-4 bold">جزئیات سفارش</h1>

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
                        نام : <span class="text-dark">{{$order->users->name}} </span></div>
                    <div  class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 font-size-13 text-center text-secondary bold my-2">
                        موبایل‌ : <span class="fa-num text-dark">{{$order->users->mobile}} </span></div>
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
                    @foreach($order_details as $order_detail)
                        <tr>
                            <td class="fa-num font-size-13 bold">
                                <span class="fa-num font-size-13 bold text-danger">{{$order_detail->quantity}}</span>
                                عدد
                                {{$order_detail->name}}
                            </td>
                            <td class="fa-num font-size-13 bold">
                                {{number_format($order_detail->quantity * $order_detail->price)}}
                                &nbsp; <span class="font-size-11 text-success">تومان</span>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="fa-num font-size-13 bold text-secondary">هزینه پیک</td>
                        <td class="fa-num font-size-13 bold text-danger fa-num">
                            @if($order->kind==2)
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
                            {{$order->finalprice}}
                            &nbsp;<span class="font-size-11 text-success">تومان</span>
                        </td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="row">
            <label class="font-size-13 bold text-right text-secondary">
                <i class="fas fa-shipping-fast color-main-green"></i>
                @if($order->kind==1)
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
                            {{$order->address}}
                        </td>
                    </tr>
                    <tr>
                        <td class="fa-num font-size-13 bold">
                            تاریخ
                        </td>
                        <td class="fa-num font-size-13 bold direction-ltr">
                            {{jdate($order->date)->format('Y / m / d - %A')}}

                        </td>
                    </tr>
                    <tr>
                        <td class="fa-num font-size-13 bold">
                            ساعت
                        </td>
                        <td class="fa-num font-size-13 bold direction-ltr">
                            {{$order->time}}
                        </td>
                    </tr>
                    <tr>
                        <td class="fa-num font-size-13 bold">
                            تاریخ ثبت سفارش
                        </td>
                        <td class="fa-num font-size-13 bold direction-ltr">
                            {{jdate($order->updated_at)->format('Y / m / d -  H : i')}}
                        </td>
                    </tr>
                    <tr>
                        <td class="fa-num font-size-13 bold">
                            وضعیت سفارش
                        </td>
                        @if($order->pay==1)
                            <td class="fa-num font-size-13 bold text-success">پرداخت شده</td>
                        @else
                            <td class="fa-num font-size-13 bold text-danger">پرداخت نشده</td>
                        @endif
                    </tr>

                    <tr>
                        <td class="fa-num font-size-13 bold">
                            شماره رهگیری
                        </td>
                        <td class="fa-num font-size-13 bold direction-ltr text-orange">
                            {{$order->pays->authority}}
                        </td>
                    </tr>
                    <tr>
                        <td class="fa-num font-size-13 bold">
                           شماره پیگیری
                        </td>
                        <td class="fa-num font-size-13 bold direction-ltr text-danger">
                            {{$order->pays->refid}}
                        </td>
                    </tr>
                </table>
            </div>
        </div>


    </div>
@endsection
