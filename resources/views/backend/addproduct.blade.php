@extends('backend.master')
@section('title','Thêm Sản Phẩm')
@section('main')
<div class="col-sm-9">
      <h4><small>Thêm Sản Phẩm</small></h4>
      <hr>
      <h2>Thêm Sản Phẩm</h2>
      
      <form action="" method="post">
        @include('errors.note')
        <form class="form-group" action="/action_page.php">
            <div class="form-inline">
                <label for="">Tên Sản Phẩm :</label>
                <label style="margin-left:90px"for="pwd">Giá:</label><br>
                <input type="text" class="form-control" name="name">
                <input type="text" class="form-control" id="pwd">
            </div>
            <div class="form-inline" style="margin-top:30px">
                <label for="">Hình Ảnh</label><br>
                <input type='file' class="form-control" id="inputFile" />
                <img  id="image_upload_preview" height="160" width="120" alt="your image" />
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
            <div class="form-group" style="margin-top:30px">
                <label for="">Mô Tả</label>
                <textarea name="" class="form-control" rows="4" required="required"></textarea>
                `
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
      <br><br>
    </div>
  </div>
</div>
@stop