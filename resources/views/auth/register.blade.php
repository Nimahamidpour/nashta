@extends('front.index')

@section('title')
ثبت نام در ناشتا
@endsection
@section('keywords')
صبحانه آنلاین در تهران،صلحانه تلفنی در تهران،صبحانه اینترنتی در تهران،سفارش صبحانه در تهران،سفارش صبحانه،سفارش آش در تهران
@endsection
@section('description')

@endsection

@section('topnav')
    @include('front.top.navbar2')
@endsection

@section('breadcrumb')
    <nav  class="col-12  my-4">
        <ol class="align-center breadcrumb">
            <li class="breadcrumb-item text-success font-rezvan font-size-22 bold" aria-current="page">صفحه اصلی -> ثبت نام  </li>
        </ol>
    </nav>
@endsection

@section('content')
    <!-- WELCOME -->
    <section class="direction-ltr bg-white pt-0 my-5" id="welcome">
        <div class="container">
            <h1 class="font-rezvan  font-size-33 text-success bold text-center">عــــــضویـــت در ناشتـــــــــا</h1>
            @include('front.message.message')
            <form  action="{{route('register')}}" method="POST" class="form my-3 text-right direction-rtl border p-2 rounded">
                @csrf
                <div class="form-row mt-3">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto mb-4">
                        <label for="name-id" class="bold"><i class="fas fa-pencil-alt prefix text-right"></i>&nbspنام</label>
                        <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name-id" name="name" placeholder="نام و فامیل" value="{{old('name')}}">
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto mb-4">
                        <label for="gender" class="bold"><i class="fas fa-pencil-alt prefix text-right"></i>&nbspجنسیت</label>
                        <select class="form-control fa-num" id="gender" name="gender">
                            <option class="fa-num" value="1">آقا</option>
                            <option class="fa-num" value="2">خانم</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto  mb-4">
                        <label for="mobile-id" class="bold"><i class="fas fa-pencil-alt prefix text-right"></i>&nbspشماره تلفن همراه</label>
                        <input type="text" class="form-control fa-num direction-ltr @error('mobile') is-invalid @enderror" id="mobile-id" name="mobile" placeholder="۰۹ ..." value="{{old('mobile')}}">
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto mb-4">
                        <label for="friendship" class="bold"><i class="fas fa-pencil-alt prefix text-right"></i>&nbspراه آشنایی با ما</label>
                        <select class="form-control fa-num" id="friendship" name="friendship">
                            @foreach($friendships as $friendship)
                                <option class="fa-num" value="{{$friendship->id}}">{{$friendship->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto  mb-4">
                        <label for="password-id" class="bold"><i class="fas fa-pencil-alt prefix text-right"></i>&nbspکلمه عبور</label>
                        <input type="password" class="form-control fa-num  @error('password') is-invalid @enderror" id="password-id" name="password" placeholder="کلمه عبور" value="{{old('password')}}">
                    </div>

                </div>
                <div class="form-row">
                    <input type="submit" class="btn btn-success mx-auto col-4" value="ثبت نام " >
                </div>
            </form>
        </div>
    </section>
    <!-- WELCOME -->
@endsection


