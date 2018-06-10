@extends('backend.master')
@section('main')
@section('title','Sản Phẩm')
<div class="col-sm-9">
      <h4><small>Danh Sách Sản Phẩm</small></h4><br>
      <hr><h2>Danh Sách Sản Phẩm</h2>

      <br>
      
      <table class="table">
          <thead>
              <tr>
                  <th>Tên Sản Phẩm</th>
                  <th>Giá</th>
                  <th>Hình Ảnh</th>
                  <th>Loại Sản Phẩm</th>
                  <th></th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Iphone</td>
                  <td><?= number_format('10000000') ?></td>
                  <td>Hình Ảnh</td>
                  <td>Iphone</td>
                  <td><a href="">Sửa <span class="glyphicon glyphicon-pencil"></span> </a></td>
                  <td><a href="">Xóa  <span class="glyphicon glyphicon-remove"></span></a></td>
              </tr>
          </tbody>
      </table>
      
      <br><br>
    </div>
  </div>
</div>
@stop