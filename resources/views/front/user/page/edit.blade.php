@extends('front.user.index')

@section('title')
  ویرایش مشخصات
@endsection
@section('keywords')

@endsection
@section('description')

@endsection

@section('breadcrumb')
    <nav  class="col-12  my-4">
        <ol class="align-center breadcrumb">
            <li class="breadcrumb-item color-main-green bold" aria-current="page">ویرایش اطلاعات کاربری </li>
        </ol>
    </nav>
@endsection


@section('content')
    <!-- WELCOME -->
    <section class="direction-ltr bg-white pt-0 my-5" id="welcome">
        <div class="container">
            <h1 class="font-rezvan  font-size-33 text-success bold text-danger">ویــــرایش مشخصات</h1>
            @include('front.message.message')
            <form  action="{{route('update-user',Auth()->user()->id)}}" method="POST" class="form my-3 text-right direction-rtl border p-2 rounded">
                @csrf
                <div class="form-row mt-3">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto mb-4">
                        <label for="name-id" class="bold"><i class="fas fa-pencil-alt prefix text-right"></i>&nbspنام</label>
                        <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name-id" name="name" placeholder="نام و فامیل" value="{{$user->name}}">
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto mb-4">
                        <label for="gender" class="bold"><i class="fas fa-pencil-alt prefix text-right"></i>&nbspجنسیت</label>
                        <select class="form-control fa-num" id="gender" name="gender">
                            @if($user->gender==1)
                                <option class="fa-num" value="1" selected>آقا</option>
                                <option class="fa-num" value="2">خانم</option>
                             @else
                                <option class="fa-num" value="1">آقا</option>
                                <option class="fa-num" value="2" selected>خانم</option>
                             @endif
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto  mb-4">
                        <label for="mobile-id" class="bold"><i class="fas fa-pencil-alt prefix text-right"></i>&nbspشماره تلفن همراه</label>
                        <input type="text" class="form-control fa-num direction-ltr @error('mobile') is-invalid @enderror" id="mobile-id" name="mobile" placeholder="۰۹ ..." value="{{$user->mobile}}">
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto  mb-4">
                        <label for="tell-id" class="bold"><i class="fas fa-pencil-alt prefix text-right"></i>&nbspشماره تلفن ثابت</label>
                        <input type="text" class="form-control fa-num text-left direction-ltr @error('tell') is-invalid @enderror" id="tell-id" name="tell" placeholder="۰۳۱ ..." value="{{$user->tell}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto mb-4">
                        <label for="birthday" class="bold"><i class="fas fa-pencil-alt prefix text-right"></i>&nbspسال تولد</label>
                        <input  class="form-control fa-num direction-ltr text-center @error('birthday') is-invalid @enderror" name="birthday" id="birthday" placeholder="تاریخ تولد" value="{{jdate($user->birthday)->format('Y / m / d')}}"/>
                        <input type="hidden"  name="birthdaytimestamp" id="birthdaytimestamp" placeholder="تاریخ تولد" value="{{jdate($user->birthday)->getTimestamp()}}" readonly/>
                    </div>

                </div>


                <div class="form-row">
                    <input type="submit" class="btn btn-success mx-auto col-4" value="ویرایش" >
                </div>
            </form>
        </div>
    </section>
    <!-- WELCOME -->
@endsection


@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#birthday").persianDatepicker({
                altField: '#birthdaytimestamp',
                altFormat: "X",
                observer: true,
                format: 'YYYY/MM/DD',
                initialValue: false,
                initialValueType: 'persian',
                autoClose: true,
                maxDate: 'today',
            });
        });

    </script>
@endsection

