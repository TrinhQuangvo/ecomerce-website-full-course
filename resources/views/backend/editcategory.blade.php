@extends('backend.master')
@section('title','Sửa Danh Mục')
@section('main')
<div class="col-sm-9">
      <h4><small>Sửa Danh Mục</small></h4>
      <hr>
      <h2>Sửa Danh Mục</h2>
      
      <form action="" method="POST" class="form-inline" role="form">
      
          <div class="form-group">
            @include('errors.note')
              <label class="sr-only" for="">Sửa Danh Mục Sản Phẩm</label>
              <input type="text" name="name" value="{{$cate->cate_name}}" class="form-control" id="">
          </div>
          <button type="submit" class="btn btn-success">Sửa</button>
        {{csrf_field()}}
        </form>
      
      <br><br>
    </div>
  </div>
</div>
@stop