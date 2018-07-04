@extends('frontend.master')
@section('main')
@section('title','Chi Tiết Sản Phẩm')

  <legend style="padding-top:50px"> Tên Sản Phẩm : {{$item->prod_name}}</legend>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <img class="photo img-responsive" style="padding:30px" src="{{asset("storage/$item->img")}}" width="300" height="370" alt="">
      <a style="color:#FFF" href="{{asset('index.php/cart/add/'.$item->id)}}"><button  style="text-align:center; font-wieght:bold" class="btn btn-block btn-success glyphicon glyphicon-shopping-cart text-center" > Thêm Vào Giỏ Hàng</button></a><br>
    </div>
    
    <div class="col-sm-7">
  <h4></h4>
        <div class="panel panel-default">
            <div class="panel-heading" style="font-weight:bold"><h3>Chi Tiết</h3></div> <!-- phần mô tả -->
            <div class="panel-body">
                <ul>
                    <li><p> Mô Tả : {{$item->description}}</p></li>
                    <li><p>Bảo Hành : {{$item->warranty}}</p></li>
                    <li><p>Tình Trạng : {{$item->condition}}</p></li>
                    <li><p>Phụ Kiện : {{$item->accessories}}</p></li>
                </ul>
            </div>
            <div class="panel-footer"><h2 style="color:#F00;font-weight:bold">"Giá : "{{number_format($item->price)}}" VNĐ"</h2></div>
        </div>
    </div>
</div>
@stop