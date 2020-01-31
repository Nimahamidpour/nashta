@extends('back.index')

@section('breadcrumb')
    <nav  class="col-12  my-4">
        <ol class="align-center breadcrumb">
            <li class="breadcrumb-item text-primary bold" aria-current="page">لیست مشتریان ناشتــــــا</li>
        </ol>
    </nav>

@endsection


@section('content')

    <div class="table-responsive">

        <table class="table table-striped table-bordered rounded">
            <tr class="text-center bg-admin text-white">
                <th class="fa-num">ش.مشتری</th>
                <th class="fa-num">نام</th>
                <th class="fa-num">تلفن</th>
                <th class="fa-num">تاریخ ثبت نام</th>
                <th class="fa-num">راه آشنایی</th>
                <th class="fa-num">جنسیت</th>
                <th class="fa-num">سن مشتری</th>
                <th class="fa-num">سفارشات</th>
                <th class="fa-num">آدرس</th>
            </tr>
            <tbody>
            @foreach($customers as $customer)
                <tr class="text-center font-size-13">
                    <td class="fa-num text-secondary bold">{{$customer->id}}</td>
                    <td class="fa-num bold">{{$customer->name}}</td>
                    <td><span class="text-primary fa-num bold">{{$customer->mobile}}</span><br/><span class="text-success fa-num bold">{{$customer->tell}}</span></td>
                    <td class="direction-ltr"><span class="fa-num text-danger bold">{!! jdate($customer->created_at)->format('Y.m.d  |  H:i:s') !!}</span></td>
                    <td class="fa-num text-success bold">{{$customer->friendships->name}}</td>
                    @if($customer->gender==1)
                        <td class="fa-num color-main-green bold">آقا</td>
                    @else
                        <td class="fa-num text-orange bold">خانم</td>
                    @endif
                    <td class="fa-num bold">{{jdate()->getYear()-jdate($customer->birthday)->getYear()}} سال </td>
                    <td class="fa-num"><a href="{{route('admin-customer-list-order',$customer->id)}}" class="btn btn-outline-success btn-sm decoration-none">سفارشات</a></td>
                    <td class="fa-num"><a href="{{route('admin-customer-list-address',$customer->id)}}" class="btn btn-outline-primary btn-sm decoration-none">آدرس</a></td>

                </tr>
            @endforeach

            </tbody>

        </table>
        {{ $customers->links() }}
    </div>

@endsection
