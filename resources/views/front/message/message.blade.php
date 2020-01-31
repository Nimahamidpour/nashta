@if($errors->any())
    <div class="alert alert-danger">
        <ul class="direction-rtl text-right">
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success direction-rtl text-right"> {{session('success')}}</div>
@endif

@if(session('warning'))
    <div class="alert alert-danger direction-rtl text-right"> {{session('warning')}}</div>
@endif
