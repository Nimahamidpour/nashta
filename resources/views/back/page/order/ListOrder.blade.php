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
                <th class="fa-num">نوع</th>
                <th class="fa-num">نام مشتری</th>
                <th class="fa-num">تلفن</th>
                <th class="fa-num">زمان ارسال</th>
                <th class="fa-num">مبلغ سفارش</th>
                <th class="fa-num">آدرس</th>
                <th class="fa-num">جزئیات</th>
            </tr>
            <tbody>
            @foreach($orders as $order)
                <tr class="text-center font-size-13">
                    <td class="fa-num text-secondary bold">{{$order->id}}</td>
                    @if($order->kind==1)
                        <td class="fa-num bold text-danger">سفارش روز</td>
                    @else
                        <td class="fa-num bold text-orange">پـــیش سفارش</td>
                    @endif
                    <td class="fa-num bold text-black">{{$order->users->name}}</td>
                    <td><span class="text-primary fa-num bold">{{$order->users->mobile}}</span><br/><span class="text-success fa-num bold">{{$order->users->tell}}</span></td>
                    <td class="direction-ltr"><span class="fa-num text-orange bold">{{jdate($order->date)->format('Y . m . d - %A')}}</span><br/><span class="fa-num text-danger bold">{{$order->time}}</span></td>
                    <td class="fa-num text-success bold">{{number_format($order->price)}}</td>
                    <td class="fa-num bold text-orange">{{$order->address}}</td>
                    <td class="fa-num"><a href="{{route('admin-order-more-info',$order->id)}}" class="btn btn-outline-success btn-sm decoration-none">جزئیات سفارش</a></td>

                </tr>
            @endforeach

            </tbody>

        </table>
        {{ $orders->links() }}
    </div>

@endsection
