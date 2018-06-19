@extends('backend.master')
@section('title','Sửa Sản Phẩm')
@section('main')
<div class="col-sm-9">
      <h4><small>Sửa Sản Phẩm</small></h4>
      <hr>
      <h2>Sửa Sản Phẩm</h2>
      
      <form action="" method="post"class="form-group" enctype="multipart/form-data">
        @include('errors.note')
            <div class="form-inline">
                <label for="">Tên Sản Phẩm :</label>
                <label style="margin-left:95px"for="price">Giá:</label>
                <label  style="margin-left:175px" for="">Danh Mục</label><br>
                <input type="text" value="{{$product->prod_name}}" class="form-control" name="name">
                <input type="text" value="{{$product->price}}" class="form-control" name="price">
                <select style="margin-left:20px" name="cate" class="form-control" id="">
                    @foreach($listcate as $cate)
                        <option value="{{$cate->id}}">{{$cate->cate_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-inline" style="margin-top:30px">
                <label for="">Hình Ảnh</label><br>
                <input type='file' class="form-control" name="img" id="inputFile" />
                <img src="{{asset('storage/'.$product->img)}}" id="image_upload_preview" name="thumbnails" height="90" width="160" alt="your image" />
                <script>
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#image_upload_preview').attr('src', e.target.result);
                            }

                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    $("#inputFile").change(function () {
                        readURL(this);
                    });
                </script>
            </div>
            
            <div class="form-block" style="margin-top:30px">
                <label for="">Mô Tả</label>
                <textarea class="form-control" name="description">{{$product->description}}</textarea>
                <script>
                    CKEDITOR.replace( 'description' );
                </script>
            </div>
            
            
            <div style="margin-top:20px" class="form-inline">
                <label for="">Tình Trạng</label>
                <label style="margin-left:90px" for="">Bảo Hành</label>
                <label style="margin-left:175px" for="">Phụ Kiện</label>
                <br>
                <select class="form-control" name="condition" id="sel1">
                    <option value="0" @if($product->condition == 0) checked @endif>Mới</option>
                    <option value="1" @if($product->condition == 1) checked @endif>Like New</option>
                </select>
                <input style="margin-left:55px" class="form-control"  value="{{$product->warranty}}" type="text" value="12 Tháng Trên Toàn Quốc" name="warranty" id="">
                <select style="margin-left:35px" class="form-control" value="{{$product->accessories}}"  name="accessories">
                    <option value="0" @if($product->accessories == 0) checked @endif >Cable , Sạc ,Tai Nghe</option>
                    <option value="1" @if($product->accessories == 1) checked @endif >Cable , Sạc</option>
                </select>
            </div>
            <div style="margin-top:30px" class="form-inline">
                <label for="">Khuyến Mãi</label>
                <label style="margin-left:155px" for="">Status</label>
                <br>
                <input type="text" class="form-control" name="promotion" value="Miếng Dán Cường Lực" id="">
                <select style="margin-left:35px" class="form-control" name="status">
                    <option value="1" @if($product->status==1) checked @endif >Chưa Có Hàng</option>
                    <option value="2" @if($product->status==2) checked @endif >Mới về</option>
                    <option value="3" @if($product->status==3) checked @endif >Tạm Hết Hàng</option>
                    <option value="4" @if($product->status==4) checked @endif >Ngừng Kinh Doanh</option>
                </select>
            </div>
            <div style="margin-top:20px" class="form-group">
                <label for="">Sản Phẩm Nổi Bậc</label><br>
                Có <input type="radio" value="1" name="featured" @if($product->featured==1) selected @endif>
                Không <input type="radio" checked name="featured" value="0" @if($product->featured==0) selected @endif>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">SỬA SẢN PHẨM</button>
            {{csrf_field()}}
        </form>
      <br><br>
    </div>
  </div>
</div>
@stop