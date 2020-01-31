@extends('back.index')

@section('breadcrumb')
    <nav  class="col-12  my-4">
        <ol class="align-center breadcrumb">
            <li class="breadcrumb-item text-primary bold" aria-current="page">لیست مشتریان ناشتــــــا</li>
        </ol>
    </nav>

@endsection


@section('content')


    <div class="container">
    <div class="table-responsive">

        <table class="table table-striped table-bordered rounded">
            <tr class="text-center bg-admin text-white">

                <th class="fa-num">آدرس</th>
            </tr>
            <tbody>
            @foreach($addresses as $address)
                <tr class="text-center font-size-13">
                    <td class="fa-num text-black bold">{{$address->address_address}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    </div>
@endsection
