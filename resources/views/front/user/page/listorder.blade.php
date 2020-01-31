@extends('front.user.index')

@section('breadcrumb')
    <nav  class="col-12  my-4">
        <ol class="align-center breadcrumb">
            <li class="breadcrumb-item color-main-green bold" aria-current="page">لیست سفارشات</li>
        </ol>
    </nav>

@endsection


@section('content')

    <div class="table-responsive">

        <table class="table table-striped table-bordered rounded">
            <tr class="text-center bg-main-green text-white">
                <th class="fa-num">ش.سفارش</th>
                <th class="fa-num">نوع سفارش</th>
                <th class="fa-num">مبلغ</th>
                <th class="fa-num">وضعیت</th>
                <th class="fa-num">تاریخ تحویل</th>
                <th class="fa-num">ساعت تحویل</th>
                <th class="fa-num">تاریخ ثبت سفارش</th>
                <th class="fa-num">جزئیات</th>
            </tr>
            <tbody>
            @foreach($orders as $order)


                <tr class="text-center font-size-13">
                    <td class="fa-num text-secondary bold">{{$order->id}}</td>
                    @if($order->kind==1)
                        <td class="fa-num bold text-success">سفارش آنی</td>
                    @else
                        <td class="fa-num bold text-danger">پیش سفارش</td>
                    @endif
                    <td class="fa-num bold">{{number_format($order->finalprice)}}</td>
                    @if($order->pay==1)
                        <td class="fa-num bold text-success">پرداخت شده</td>
                    @else
                        <td class="fa-num bold text-danger">پرداخت نشده</td>
                    @endif
                    <td class="fa-num bold text-primary direction-ltr">{{jdate($order->date)->format('Y / m / d - %A')}}</td>
                    <td class="fa-num bold direction-ltr">{{$order->time}}</td>
                    <td class="fa-num bold text-danger direction-ltr">{{jdate($order->updated_at)->format('Y / m / d -  H: i')}}</td>
                    <td class="fa-num"><a href="{{route('order-more-info',$order->id)}}" class="btn btn-outline-success btn-sm decoration-none">جزئیات</a></td>

                </tr>
            @endforeach

            </tbody>

        </table>
        {{$order->link}}
    </div>

@endsection
