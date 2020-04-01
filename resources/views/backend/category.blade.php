@extends('backend.master')
@section('main')
@section('title','Categories')

<div class="col-sm-9">
      <h2><legend>Thêm Danh Mục</legend></h2>
      
      <form action="" method="POST" class="form" role="form">
      {{csrf_field()}}
      @include('errors.note')
          <div class="form-group col-xs-4">
              <label class="sr-only" for="">Thêm Mới Danh Mục Sản Phẩm</label>
              <input type="text" name="name" class="form-control" id="">
              <input type="hidden" name="user" value="{{Auth::user()->email}}">
          </div>
          <input type="submit" name="submit" class="btn btn-success"value="Thêm">
          {{csrf_field()}}
      </form>
      <br><br>
      
      <h4><small>Các Danh Mục Đã Có</small></h4>
      <hr>
      <h2>Categories</h2>
<form action="{{ asset("index.php/admin/category/del")}}" method="POST" class="form" role="form">
{{csrf_field()}}
 <div class="table">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>
          <div class="checkbox">
            <label>
                <input id="checkall" type="checkbox" value="">Chọn Hết
            </label>
          </div>
        </th>
        <th class="">Tên</th>
        <th></th>
        <th></th>
       
      </tr>
    </thead>
    <tbody>
        @foreach($catelist as $cate)
      <tr>
        <th>
        <div class="checkbox">
          <label><input type="checkbox" class="checkitem" value="{{$cate->id}}" name="del[]">Chọn</label>
        </th>
        </div>
        <td>{{$cate->cate_name}}</td>
        <td><a href="{{asset('index.php/admin/category/edit/'.$cate->cate_id)}}">Sửa  <span class="glyphicon glyphicon-pencil"></span> </a></td>
        <td><a onclick="del" href="{{asset('index.php/admin/category/delete/'.$cate->cate_id)}}">Xóa  <span class="glyphicon glyphicon-remove"></span></a></td>
      </tr>
       @endforeach
       
    </tbody>
    <button type="submit" class="btn btn-warning">Delete Selected</button>
  </table>
  </div>
      <hr>
    </div>
  </div>
</div>
</form>

<script>
    $("#checkall").change(function(){
        $("input:checkbox").prop("checked",$(this).prop("checked"))
    })
</script>
@stop