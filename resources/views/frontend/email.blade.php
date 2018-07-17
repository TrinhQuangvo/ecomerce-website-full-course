@extends('frontend.master')
@section('title','Xác Nhận Mua Hàng')
@section('main')
    <div class="container">
        <div class="row">
            
            <form action="" method="POST" role="form">
                <legend>Thông Tin Khách Hàng</legend>
            
                <div class="form-group">
                    <label for="">{{$info['name']}}</label>
                    <label for="">{{$info['email']}}</label>
                    <label for="">{{$info['tel']}}</label>
                    <label for="">{{$info['address']}}</label>
                </div>
            
                
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
@endsection