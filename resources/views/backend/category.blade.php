@extends('backend.master')
@section('main')
@section('title','Categories')
<div class="col-sm-9">
      <script>
        function del()
        {
          $.ajax({
            url: 'http://localhost/mylaravel/public/index.php/admin/category/delete/',
            type:'POST',
            

          });
        }
      </script>
      <h2><legend>Thêm Danh Mục</legend></h2>
      
      <form action="" method="POST" class="form" role="form">
      
      @include('errors.note')
          <div class="form-group col-xs-4">
              <label class="sr-only" for="">Thêm Mới Danh Mục Sản Phẩm</label>
              <input type="text" name="name" class="form-control" id="">
          </div>
          <input type="submit" name="submit" class="btn btn-success"value="Thêm">
          {{csrf_field()}}
      </form>
      <br><br>
      
      <h4><small>Các Danh Mục Đã Có</small></h4>
      <hr>
      <h2>Categories</h2>

 <div class="table text-center">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th class="text-center">Tên</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach($catelist as $cate)
      <tr>
        <td>{{$cate->cate_name}}</td>
        <td><a href="{{asset('index.php/admin/category/edit/'.$cate->id)}}">Sửa <span class="glyphicon glyphicon-pencil"></span> </a></td>
        <td><a onclick="del" href="{{asset('index.php/admin/category/delete/'.$cate->id)}}">Xóa  <span class="glyphicon glyphicon-remove"></span></a></td>
      </tr>
       @endforeach
    </tbody>
  </table>
  </div>
      <hr>
    </div>
  </div>
</div>
@stop