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
                <th class="fa-num">ش.منو</th>
                <th class="fa-num">نام</th>
                <th class="fa-num">دسته بندی</th>
                <th class="fa-num">قیمت</th>
                <th class="fa-num">سفارش روز</th>
                <th class="fa-num">سفارشات</th>
                <th class="fa-num">ویرایش</th>

            </tr>
            <tbody>
            @foreach($foods as $food)
                <tr class="text-center font-size-13">
                    <td class="fa-num text-secondary bold">{{$food->id}}</td>
                    <td class="fa-num bold">{{$food->name}}</td>
                    <td class="fa-num text-orange bold">{{$food->categories->name}}</td>
                    <td class="fa-num bold text-success">{{number_format($food->price)}}</td>

                    @if($food->dayorder==1)
                        <td class="fa-num"><a href="{{route('admin-food-update-day-order',$food->id)}}" class="btn btn-outline-danger btn-sm decoration-none">غیر فعال کردن</a></td>
                    @else
                        <td class="fa-num"><a href="{{route('admin-food-update-day-order',$food->id)}}" class="btn btn-outline-success btn-sm decoration-none">فعال کردن</a></td>
                    @endif


                    <td class="fa-num"><a href="{{route('admin-food-order-list',$food->id)}}" class="btn btn-outline-primary btn-sm decoration-none">سفارشات</a></td>
                    <td class="fa-num"><a href="" class="btn btn-outline-secondary btn-sm decoration-none">ویرایش</a></td>

                </tr>
            @endforeach

            </tbody>

        </table>
        {{ $foods->links() }}
    </div>

@endsection
