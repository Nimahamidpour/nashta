@extends('front.user.index')

@section('content')
    @if($carts)
        <h1 class="text-danger font-size-17 my-4 bold">لیست سفارشات شما</h1>
        <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12 mx-auto table-responsive">
            <table class="table border-bottom table-hover text-right">
                <tr>
                    <td>&nbsp;</td>
                    <th class="font-size-15">نام غذا</th>
                    <th class="font-size-15">قیمت</th>
                    <th class="font-size-15">تعداد</th>
                    <th class="font-size-15">مجموع</th>
                </tr>

                @foreach($carts as $cart)
                    <tr>
                        <td class="text-left cursor-pointer"><span class="cursor-pointer" style="cursor: pointer"><i
                                    class="fa fa-fw text-danger fa-times"
                                    onclick="removefrombasket({{$cart['id']}})"></i></span></td>
                        <td class="font-size-15">{{$cart['name']}}</td>
                        <td class="fa-num font-size-15">{{number_format($cart['price'])}}</td>
                        <td class="fa-num font-size-15">
                            <select class="fa-num form-control-sm" onchange="updatecart({{$cart['id']}},this.value)">
                                @for($i=1;$i<16;$i++)
                                    @if($i==$cart['quantity'])
                                        <option class="fa-num" value="{{$i}}" selected>{{$i}}</option>
                                    @else
                                        <option class="fa-num" value="{{$i}}">{{$i}}</option>
                                    @endif
                                @endfor
                            </select>
                        </td>
                        <td class="fa-num font-size-15">{{number_format($cart['quantity']*$cart['price'])}}</td>
                    </tr>
                @endforeach
                <tr class="text-center bg-admin">
                    <td colspan="3" class="bold text-black">مجموع قابل پرداخت</td>
                    <td colspan="2" class="fa-num bold">
                        @php
                            $carts=session()->get('cart');
                            $priceall=0;
                            foreach ($carts as $cart)
                            {
                                $priceall+=$cart['quantity']*$cart['price'];
                            }
                            echo '<span class="fa-num text-black">'.number_format($priceall).'</span>'.'<span class="text-black"> تومان </span>' ;
                        @endphp
                    </td>
                </tr>
            </table>
        </div>
        <div class="row mx-auto">
            <a class="btn btn-success mt-5 mx-auto" style="width: 200px" href="{{route('user-panel-time')}}">مرحله بعد
                <i class="fa fa-fw fa-chevron-left"></i></a>
        </div>
    @else
        <div class="alert alert-warning text-center m-5">متاسفانه سبد خرید شما خالی می باشد.</div>
    @endif


@endsection
