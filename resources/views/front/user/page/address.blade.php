@extends('front.user.index')

@section('title')
ثبت نام در ناشتا
@endsection
@section('keywords')
صبحانه آنلاین در تهران،صلحانه تلفنی در تهران،صبحانه اینترنتی در تهران،سفارش صبحانه در تهران،سفارش صبحانه،سفارش آش در تهران
@endsection
@section('description')

@endsection

@section('breadcrumb')
    <nav  class="col-12  my-4">
        <ol class="align-center breadcrumb">
            <li class="breadcrumb-item text-success font-rezvan font-size-22 bold" aria-current="page">صفحه اصلی -> ثبت آدرس  </li>
        </ol>
    </nav>
@endsection

@section('content')
    <!-- WELCOME -->
    <section class="direction-ltr bg-white pt-0 my-5" id="welcome">
        <div class="container">
            <h1 class="font-rezvan  font-size-33 text-success bold text-center">ثبت آدرس جدید در ناشتـــــــــا</h1>
            @include('front.message.message')
            <form  action="{{route('register')}}" method="POST" class="form my-3 text-right direction-rtl border p-2 rounded">
                @csrf
                <div class="form-row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto  mb-4">
                        <label for="address-id" class="bold"><i class="fas fa-pencil-alt prefix text-right"></i>&nbspآدرس</label>
                        <input type="text" class="form-control fa-num @error('address') is-invalid @enderror" id="address-id" name="address" placeholder="آدرس" value="{{old('address')}}">
                    </div>
                </div>
                <div class="form-row">
                    <input type="submit" class="btn btn-success mx-auto col-4" value="ثبت" >
                </div>

            </form>
        </div>
    </section>
    <!-- WELCOME -->
@endsection
