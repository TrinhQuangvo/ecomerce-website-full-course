@extends('frontend.master')
@section('title','Tìm Kiếm')
@section('main')
<div class="row">
    <div class="col-md-9" style="padding-top:75px">
        <legend>{{ucwords($keyword)}}</legend>
            </div>
            <div class="col-md-3" style="padding-top:80px ; padding-left:150px">
                <!-- Controls -->
                <div class="row">
                <button type="button" class="btn btn-lg btn-info">Xem Thêm</button>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px">
                    @foreach($items as $item)
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
@stop