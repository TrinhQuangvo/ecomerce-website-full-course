@extends('frontend.master')
@section('main')
@section('title','Danh Mục Sản Phẩm')

<div class="row">
    <div class="row">
        <div class="col-md-9" style="padding-top:75px">
            <h3>Sản Phẩm Mới</h3>
        </div>
    </div>
    <div class="row" style="margin-top:50px">
        @foreach($item as $cate_item)
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{$cate_item->prod_name}}</div>
                <div class="panel-body"><img src="{{asset('storage/'.$cate_item->img)}}" class="photo img-responsive" style="height:180px" alt="Image"></div>
                <div class="panel-footer">
                    <h3 style="color:#9b321a"><b>Giá : {{number_format($cate_item->price)}}</b> </h3>
                    <button type="button" class="btn btn-sm btn-success"><a href="{{asset("index.php/detail/".$cate_item->id.'/'.$cate_item->prod_slug.'.html')}}">Chi Tiết Sản Phẩm</a></button>
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
</div>
@stop