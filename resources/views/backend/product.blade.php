@extends('backend.master')
@section('main')
@section('title','Sản Phẩm')
<div class="col-sm-9">
      <h4><small>Danh Sách Sản Phẩm</small></h4><br>
      <hr><h2>Danh Sách Sản Phẩm</h2>

      <br>
      
      <table class="table">
              <tr>
                  <th>Tên Sản Phẩm</th>
                  <th>Giá</th>
                  <th>Hình Ảnh</th>
                  <th>Danh Mục</th>
                  <th colspan="2">Action</th>
              </tr>
          </thead>
          <tbody>
          @foreach($productlist as $product)
              <tr>
                  <td>{{$product->prod_name}}</td>
                  <td>{{number_format($product->price)}}</td>
                  <td><img src="{{asset('storage/'.$product->img)}}" width="80" height="80" alt="" srcset=""></td>                 
                  <td>{{$product->cate_name}}</td>
                  <td><a href="{{asset('index.php/admin/product/edit/'.$product->id)}}">Sửa <span class="glyphicon glyphicon-pencil"></span> </a></td>
                  <td><a href="{{asset('index.php/admin/product/delete/'.$product->id)}}">Xóa  <span class="glyphicon glyphicon-remove"></span></a></td>
              </tr>
            @endforeach     
          </tbody>
        {{ $productlist->links()}}
      </table>
      
      <br><br>
    </div>
  </div>
</div>
@stop