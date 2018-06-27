@extends('frontend.master')
@section('main')
@section('title','Trang Chủ')

        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-9" style="padding-top:75px">
                        <h3>Sản Phẩm Đặc Biệt</h3>
                    </div>
                    <div class="col-md-3" style="padding-top:70px">
                        <!-- Controls -->
                        <div class="row">{{$featured->links()}}</div>
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
                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-{{$item->id}}">Detail</button>
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
        <div class="col-md-3" style="padding-top:70px">
        {{$new->links()}}
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
                    <button  type="button" class="btn btn-sm btn-success">Chi Tiết Sản Phẩm</button>
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
</div>
@stop