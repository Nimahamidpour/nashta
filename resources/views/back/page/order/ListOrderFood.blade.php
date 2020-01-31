@extends('back.index')

@section('breadcrumb')
    <nav  class="col-12  my-4">
        <ol class="align-center breadcrumb">
            <li class="breadcrumb-item text-primary bold" aria-current="page">لیست سفارشات ناشتــــــا</li>
        </ol>
    </nav>

@endsection


@section('content')

    <div class="table-responsive">

        <table class="table table-striped table-bordered rounded">
            <tr class="text-center bg-admin text-white">
                <th class="fa-num">ش.سفارش</th>
                <th class="fa-num">نوع سفارش</th>
                <th class="fa-num">نام</th>
                <th class="fa-num">تعداد</th>
                <th class="fa-num">مبلغ </th>
                <th class="fa-num">زمان تحویل </th>
            </tr>
            <tbody>
            @foreach($orders as $order)
                <tr class="text-center font-size-13">
                    <td class="fa-num text-secondary bold">{{$order->order_id}}</td>
                    @if($order->orders->kind==1)
                        <td class="fa-num bold text-danger">سفارش روز</td>
                    @else
                        <td class="fa-num bold text-orange">پـــیش سفارش</td>
                    @endif
                    <td class="fa-num bold text-black">{{$order->name}}</td>
                    <td class="fa-num bold text-black">{{$order->quantity}}</td>
                    <td class="fa-num text-success bold">{{number_format($order->price)}}</td>
                    <td class="direction-ltr"><span class="fa-num text-orange bold">{{jdate($order->orders->date)->format('Y . m . d - %A')}}</span><br/><span class="fa-num text-danger bold">{{$order->orders->time}}</span></td>

                </tr>
            @endforeach

            </tbody>

        </table>
        {{ $orders->links() }}
    </div>

@endsection
