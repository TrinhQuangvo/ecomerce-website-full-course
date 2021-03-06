@extends('frontend.master')
@section('main')
@section('title','Trang Chủ')

        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-9" style="padding-top:75px">
                        <legend>Sản Phẩm Đặc Biệt</legend>
                    </div>
                    <div class="col-md-3" style="padding-top:80px ; padding-left:150px">
                        <!-- Controls -->
                        <div class="row">
                        <button type="button" class="btn btn-lg btn-info">Xem Thêm</button>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:50px">
                    @foreach($featured as $item)
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">{{$item->prod_name}}</div>
                            <div class="panel-body"><img src="{{asset('storage/'.$item->img)}}" class="photo img-responsive" style="height:180px" alt="Image"></div>
                            <div class="panel-footer">
                                <h3>Giá : {{number_format($item->price)}}</h3>
                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-{{$item->id}}"><a  href="{{asset("index.php/detail/".$item->id.'/'.$item->prod_slug.'.html')}}">Chi Tiết Sản Phẩm</a></button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
<hr>
<div class="row">
    <div class="row">
        <div class="col-md-9" style="padding-top:75px">
            <h3>Sản Phẩm Mới</h3>
        </div>
    </div>
    <div class="row" style="margin-top:50px">
        @foreach($new as $new_item)
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{$new_item->prod_name}}</div>
                <div class="panel-body"><img src="{{asset('storage/'.$new_item->img)}}" class="photo img-responsive" style="height:180px" alt="Image"></div>
                <div class="panel-footer">
                    <h3 style="color:#9b321a"><b>Giá : {{number_format($new_item->price)}}</b> </h3>
                    <button type="button" class="btn btn-sm btn-success"><a href="{{asset("index.php/detail/".$new_item->id.'/'.$new_item->prod_slug.'.html')}}">Chi Tiết Sản Phẩm</a></button>
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
</div>
@stop