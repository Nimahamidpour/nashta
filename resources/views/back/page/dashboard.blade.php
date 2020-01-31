@extends('back.index')

@section('breadcrumb')
    <nav  class="col-12  my-4">
        <ol class="align-center breadcrumb">
            <li class="breadcrumb-item text-primary bold" aria-current="page">داشبورد</li>
        </ol>
    </nav>

@endsection

@section('content')

    <!-- Icon Cards-->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                <a class="decoration-none" href="">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-comments"></i>
                            </div>
                            <div class="text-center bold">تعداد سفارشات ارسال نشده </div>
                        </div>
                        <div class="card-footer  clearfix  z-1 text-center static-answer fa-num  bold font-size-20" id="count_category_id">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                <a class="decoration-none" href="">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-comments"></i>
                            </div>
                            <div class="text-center bold">تعداد سفارشات در دست اقدام</div>
                        </div>
                        <div class="card-footer clearfix  z-1 text-center static-answer fa-num  bold font-size-20" id="count_product_id">
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
@endsection
