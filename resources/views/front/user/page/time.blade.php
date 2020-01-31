@extends('front.user.index')

@section('content')
    <form method="post" action="{{route('user-panel-finalorder')}}">
        @csrf
        <div class="container border rounded p-3 mt-3">
            @if(session()->get('kind')==2)
                <h2 class="font-size-15 bold text-right color-main-green line-35">انتخاب زمان تحویل</h2>
                <div class="row">
                    <div
                        class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-6 text-right text-xl-center text-lg-center mb-2">
                        <span class="bold font-size-13">تاریخ :‌ </span>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 text-center  mb-3" style="cursor: pointer"
                         id="choosedate">
                        <label for="selected_date" style="cursor: pointer"><i
                                class="far fa-calendar-alt text-danger"></i></label>
                        <input type="text" class="font-size-13 bold  rounded col-8" id="selected_date"
                               value="انتخاب تاریخ">
                        <input type="text" class="d-none" id="selected_date_hidden" value="{{jdate()->getTimestamp()+86400}}" name="date"/>
                    </div>
                </div>
                <div class="row">
                    <div
                        class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-xs-12 text-right text-xl-center text-lg-center mb-2">
                        <span class="bold font-size-13">ساعت :‌ </span>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center mb-3">
                        <label for="selected_time" style="cursor: pointer"> <i
                                class="far fa-clock text-danger"></i></label>
                        <select class="font-size-13 bold rounded col-8" id="selected_time" name="time">
                            @foreach($time as $itemtime)
                                <option class="font-size-13 fa-num"
                                        value="{{$itemtime->name}}">{{$itemtime->name}}</option>
                            @endforeach

                        </select>

                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 text-right">
                    <h2 class="font-size-15 bold mt-3  text-right color-main-green ">انتخاب آدرس</h2>
                        @if(count($address)<1)
                        <div class="my-3 text-danger bold font-size-13" id="no_address">برای شما تا کنون آدرسی ثبت نشده است.</div>
                         @endif
                        <table class="table table-hover border-bottom text-right" id="address_table">
                        @foreach($address as $item_address)
                            <tr>
                                <td><input class="" type="radio" name="address"
                                           value="{{$item_address->address_address}}" id="address{{$item_address->id}}"
                                           checked></td>
                                <td colspan="2"><label class="font-size-13 bold p-0 m-0"
                                                       for="address{{$item_address->id}}">{{$item_address->address_address}}</label>
                                </td>
                            </tr>
                        @endforeach
                    </table>


                    <button  type="button" class="btn btn-secondary btn-sm d-block" onclick="showaddaddress()" id="btn_add_address"><i class="fa fa-plus"></i> افزودن آدرس </button>
                    <div class="row d-none" id="div_add_address">
                        <textarea class="form-control font-size-13 bold col-11 m-2" name="add_address" id="add_address" placeholder="آدرس شما"></textarea>
                        <input type="button" class="btn btn-primary btn-sm m-2" value="افزودن آدرس" onclick="addaddress()">
                    </div>

                </div>
            </div>
            <div class="row mx-auto">
                <input type="submit" class="btn btn-success mt-5 mx-auto" style="width: 200px" value="مرحله بعد " >
            </div>

        </div>
    </form>
@endsection
@section('script')

    <script type="text/javascript">
        $(document).ready(function () {
            $("#selected_date").persianDatepicker({
                altField: '#selected_date_hidden',
                altFormat: "X",
                observer: true,
                format: 'YYYY/MM/DD',
                initialValue: false,
                initialValueType: 'persian',
                autoClose: true,
                minDate: 'today',
            });
        });

    </script>
@endsection
