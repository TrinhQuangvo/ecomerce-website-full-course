@if(Session::has('error'))
<!-- dùng để xuât ra lỗi -->
    <p class="alert alert-danger text-center">
        {{Session::get('error')}}
    </p>    
@endif

@foreach ($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
@endforeach