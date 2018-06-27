@extends('frontend.master')
@section('main')
@section('title','Chi Tiết Sản Phẩm')

  <legend style="padding-top:50px"> Trang Chi Tiết Sản Phẩm</legend>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <img class="photo img-responsive" style="padding:30px" src="{{asset("storage/samsung-galaxy-s9-plus-128gb-vang-dong-1-400x460.png")}}" width="300" height="370" alt="">
      
    </div>
    
    <div class="col-sm-4">
  <h4>Samsung galaxy S9 plus 128gb Gold Rose</h4>
        <div class="panel panel-default">
            <div class="panel-heading">Chi Tiết Cấu Hình Sản Phẩm</div> <!-- phần mô tả -->
            <div class="panel-body">Panel Content</div>
            <div class="panel-footer">Giá : <?=number_format(30000000)?></div>
        </div>
    </div>

    <div class="col-sm-4" style="padding:30px">
        <button class="btn btn-lg btn-success glyphicon glyphicon-shopping-cart"> BUY NOW !! </button><br>
        <button style="margin-top:20px" class="btn btn-lg btn-warning glyphicon glyphicon-ok"> HOT DEAL !! </button><br>
    </div>
  </div>
</div>
@stop