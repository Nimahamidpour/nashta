@extends('front.index')

@section('title')
ورود مشتریان
@endsection
@section('keywords')

@endsection
@section('description')

@endsection

@section('topnav')
    @include('front.top.navbar2')
@endsection
@section('content')
    <!-- WELCOME -->
    <section class="page-section direction-ltr main-background pt-0" id="welcome">
        <div class="container">

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mx-auto">
                    <div class="card">
                        <div class="bg-light-gray card-header font-size-19 bold  align-right text-center" >
                            ورود به پنل کاربری ناشتا
                        </div>
                        <div class="card-body">
                            @include('front.message.message')
                            <form action="{{route('login')}}" method="POST" class="align-right">
                                @csrf
                                <div class="form-row direction-rtl">
                                    <i class="fa fa-user text-orange"></i> &nbsp;
                                    <label for="mobile-id" class="bold">نام کاربری</label>&nbsp;
                                    <div class="input-icons col-12">
                                        <input value="{{old('mobile')}}" id="mobile-id" name="mobile" class="input-field form-control rounded p-4 fa-num text-center" type="text" placeholder="۰۹۱۲۳۴۵۶۷۸۹" >
                                        <div class="font-size-13 text-danger bold text-center mt-2 d-none" id="error-phnum" >شماره تماس وارد شده اشتباه است</div>
                                    </div>
                                </div>
                                <div class="form-row direction-rtl mt-3">
                                    <i class="fas fa-lock text-orange"></i>&nbsp;
                                    <label for="password-id" class="bold">کلمه عبور</label>
                                    <div class="input-icons col-12">
                                        <input value="{{old('password')}}" id="password-id" name="password" class="input-field form-control rounded p-4 fa-num text-center" type="password" placeholder="کلمه عبور" >
                                        <div class="font-size-13 text-danger bold text-center mt-2 d-none" id="error-phnum" >شماره تماس وارد شده اشتباه است</div>
                                    </div>
                                </div>
                                <div class="form-row mt-3 direction-rtl text-center">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 checkbox">
                                        <label class="bold " for="remember-id">
                                            به خاطر سپردن
                                            <input  type="checkbox" value="remember-me" name="remember" id="remember-id">
                                        </label>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <button onclick="" class="btn decoration-none font-size-15 text-danger bold">فراموشی کلمه عبور</button>
                                    </div>
                                </div>

                                <div class="col-5 mx-auto mt-3">
                                    <input type="submit" class="btn btn-success  form-control btn-sm font-size-17 bold" value="ورود">
                                </div>
                                <div class="form-row mt-3 direction-rtl">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto text-center">
                                        <a href="{{route('register')}}" class="decoration-none font-size-15 text-danger bold">ثبـــــت نام نکردید؟<span class="text-success font-size-15 bold"> ثبت نام کنید</span></a>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- WELCOME -->


@endsection
